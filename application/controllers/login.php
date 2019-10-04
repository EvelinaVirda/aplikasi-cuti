<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}
	
	public function index()
	{
		$this->load->view('login');
	}

	function login_proses(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->m_login->auth_admin($username,$password);
        $cek_pimpinan=$this->m_login->auth_pimpinan($username,$password);
        $cek_user=$this->m_login->auth_user($username,$password);
        $this->session->set_userdata('masuk',TRUE);
        if($cek_admin->num_rows() > 0){ 
            $data=$cek_admin->row_array();
            $this->session->set_userdata('ses_nama',$data['username']);
            redirect('admin');
 
        }elseif($cek_pimpinan->num_rows() > 0) {
            $data2=$cek_pimpinan->row_array();
            $this->session->set_userdata('ses_nama',$data2['username']);
            redirect('pimpinan');

        }elseif ($cek_user->num_rows() > 0) {
            $data3=$cek_user->row_array();
            $this->session->set_userdata('ses_nama',$data3['username']);
            redirect('karyawan/data_cuti');
        } else{
            redirect('login');
        }
 
    }

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
