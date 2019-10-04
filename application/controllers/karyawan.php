<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('login');
            redirect($url);
        }
	}

	public function input_cuti()
	{
		$this->load->view('template/header_karyawan');
		$this->load->view('karyawan/tambah_cuti');
		$this->load->view('template/footer');
	}

	public function tambah_cuti()
	{
		$id_karyawan = $this->input->post('id_karyawan');
		$nama_user = $this->input->post('nama_user');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$keterangan = $this->input->post('keterangan');
		$status = $this->input->post('status');
 
		$data = array(
			'id_karyawan' => $id_karyawan,
			'nama_user' => $nama_user,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'keterangan' => $keterangan,
			'status' => $status,
			);
		$this->m_data->tambah_cuti($data,'tbl_cuti');
		redirect('karyawan/data_cuti');
	}

	public function data_cuti()
	{
        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data('tbl_cuti');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/karyawan/data_cuti/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 6;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        
        $data['data_cuti'] = $this->m_data->tampil_data('tbl_cuti',$config['per_page'],$from);
        $this->load->view('template/header_karyawan');
        $this->load->view('karyawan/data_cuti',$data);
        $this->load->view('template/footer');
	}

}