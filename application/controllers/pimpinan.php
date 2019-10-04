<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

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

    // DATA CUTI

	public function index()
	{
        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data('tbl_cuti');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/pimpinan/index/';
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

        
        $data['data_karyawan'] = $this->m_data->tampil_data('tbl_cuti',$config['per_page'],$from);
        $this->load->view('template/header_pimpinan');
        $this->load->view('pimpinan/index',$data);
        $this->load->view('template/footer');
	}

    // DATA KARYAWAN

	public function data_karyawan()
    {

        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data_pimpinan('tbl_user');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/pimpinan/data_karyawan/';
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

        $data['data_karyawan'] = $this->m_data->tampil_data_karyawan('tbl_user',$config['per_page'],$from);
        $this->load->view('template/header_pimpinan');
        $this->load->view('pimpinan/data_karyawan',$data);
        $this->load->view('template/footer');
    }

    // DETAIL

    public function detail_cuti($id_karyawan)
    {
        $where = array('id_karyawan' => $id_karyawan );
        $data['detail'] = $this->m_data->detail_cuti($where,'tbl_user')->result();
        $data['detail2'] = $this->m_data->detail_cuti($where,'tbl_cuti')->result();
        $this->load->view('template/header_pimpinan');
        $this->load->view('pimpinan/detail_cuti',$data);
        $this->load->view('template/footer');  
          
    } 

    // EDIT STATUS CUTI

    public function edit_status_cuti($id_cuti)
    {
        $where = array('id_cuti' => $id_cuti );
        $data['data'] = $this->m_data->single_data_cuti($where,'tbl_cuti')->result();
        $this->load->view('template/header_pimpinan');
        $this->load->view('pimpinan/edit_status_cuti',$data);
        $this->load->view('template/footer'); 
    }

    public function edit_status_cuti_proses()
    {
        $id_cuti = $this->input->post('id_cuti');
        $status = $this->input->post('status');

        $data = array(
            'id_cuti' => $id_cuti,
            'status' => $status
            );
        $where = array(
            'id_cuti' => $id_cuti
            );

        $this->m_data->update_cuti($where,$data,'tbl_cuti');
        redirect('pimpinan');
    }
}