<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('admin/index');
		$this->load->view('template/footer');
	}

    // DATA CUTI

	public function pengajuan_cuti()
	{
        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data('tbl_cuti');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/pengajuan_cuti/';
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
        $this->load->view('template/header');
        $this->load->view('admin/pengajuan_cuti',$data);
        $this->load->view('template/footer');
	}

    // DATA USER

    public function data_admin()
        {

        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data_admin('tbl_user');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/data_admin/';
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

        $data['data_admin'] = $this->m_data->tampil_data_admin('tbl_user',$config['per_page'],$from);
        $this->load->view('template/header');
        $this->load->view('admin/data_admin',$data);
        $this->load->view('template/footer');
        }

    public function data_pimpinan()
        {

        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data_pimpinan('tbl_user');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/data_pimpinan/';
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

        $data['data_pimpinan'] = $this->m_data->tampil_data_pimpinan('tbl_user',$config['per_page'],$from);
        $this->load->view('template/header');
        $this->load->view('admin/data_pimpinan',$data);
        $this->load->view('template/footer');
        }

    public function data_karyawan()
        {

        $this->load->database();
        $jumlah_data = $this->m_data->jumlah_data_pimpinan('tbl_user');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/data_pimpinan/';
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
        $this->load->view('template/header');
        $this->load->view('admin/data_karyawan',$data);
        $this->load->view('template/footer');
        }

        // End Of Data User

        // Detail

    public function detail_cuti($id_karyawan)
    {
        $where = array('id_karyawan' => $id_karyawan );
        $data['detail'] = $this->m_data->detail($where,'tbl_cuti')->result();
        $this->load->view('template/header');
        $this->load->view('admin/detail',$data);
        $this->load->view('template/footer');
    }

    public function detail_cuti2($id_karyawan)
    {
        $where = array('id_karyawan' => $id_karyawan );
        $data['detail'] = $this->m_data->detail_cuti($where,'tbl_user')->result();
        $data['detail2'] = $this->m_data->detail_cuti($where,'tbl_cuti')->result();
        $this->load->view('template/header');
        $this->load->view('admin/detail_cuti',$data);
        $this->load->view('template/footer');  
          
    } 

    public function detail_cuti3($id_karyawan)
    {
        $data['detail'] = $this->m_data->detail_cuti3('tbl_cuti');
        $this->load->view('template/header');
        $this->load->view('admin/detail_cuti',$data);
        $this->load->view('template/footer');     
    } 

        // End Of Detail

        // CRUD Admin

    public function tambah_data_user()
    {
        $this->load->view('template/header');
        $this->load->view('admin/tambah_data_user');
        $this->load->view('template/footer');
    }

    public function tambah_user_proses(){

        $this->form_validation->set_rules('id_karyawan','ID Karyawan ','required');
 
        if($this->form_validation->run() != false){
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["foto"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
        if ( ! $this->upload->do_upload('foto'))
        {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        else
        {
            $id_karyawan = $this->input->post('id_karyawan');
            $nama_user = $this->input->post('nama_user');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $email = $this->input->post('email');
            $jabatan = $this->input->post('jabatan');
            $level = $this->input->post('level');
            $no_ktp = $this->input->post('no_ktp');
            $data = array('upload_data' => $this->upload->data());
            print_r($this->upload->data());
            $datafoto=$this->upload->data();
            $nm_file = $datafoto['orig_name'];
            $data = array(
                'id_karyawan' => $id_karyawan,
                'nama_user' => $nama_user,
                'username' => $username,
                'password' => md5($password),
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'email' => $email,
                'jabatan' => $jabatan,
                'level' => $level,
                'no_ktp' => $no_ktp,
                'foto' => $nm_file
                );
            $this->m_data->input_data_user($data,'tbl_user');
            redirect('admin/data_admin');
        }
    } else{
                $this->load->view('template/header');
                $this->load->view('admin/tambah_data_user');
                $this->load->view('template/footer');
          }
    }

    // EDIT DATA

    public function edit_data_karyawan($id_karyawan)
    {
        $where = array('id_karyawan' => $id_karyawan );
        $data['data_admin'] = $this->m_data->single_data($where,'tbl_user')->result();
        $this->load->view('template/header');
        $this->load->view('admin/edit_data_karyawan',$data);
        $this->load->view('template/footer');
    }

    // END OF EDIT DATA

    public function edit_data_karyawan_proses(){
        $this->form_validation->set_rules('id_karyawan','ID Karyawan ','required');
 
        if($this->form_validation->run() != false){
 
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            $new_name = time().$_FILES["foto"]['name'];
            $config['file_name'] = $new_name;
            $this->load->library('upload', $config);
 
            if(empty($_FILES['foto']['name'])){
                $id_karyawan = $this->input->post('id_karyawan');
                $nama_user = $this->input->post('nama_user');
                $username = $this->input->post('username');
                $alamat = $this->input->post('alamat');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $email = $this->input->post('email');
                $jabatan = $this->input->post('jabatan');
                $level = $this->input->post('level');
                $no_ktp = $this->input->post('no_ktp');
                $data = array(
                   'id_karyawan' => $id_karyawan,
                    'nama_user' => $nama_user,
                    'username' => $username,
                    'alamat' => $alamat,
                    'jenis_kelamin' => $jenis_kelamin,
                    'email' => $email,
                    'jabatan' => $jabatan,
                    'level' => $level,
                    'no_ktp' => $no_ktp
                    );
                $where = array(
                    'id_karyawan' => $id_karyawan
                    );
 
                $this->m_data->update_data($where,$data,'tbl_user');
                redirect('admin');
            } else {
 
                if ( ! $this->upload->do_upload('foto')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                // $this->load->view('karyawan/datakaryawan', $error);
                } else {
                    $id_karyawan = $this->input->post('id_karyawan');
                    $nama_user = $this->input->post('nama_user');
                    $username = $this->input->post('username');
                    $alamat = $this->input->post('alamat');
                    $jenis_kelamin = $this->input->post('jenis_kelamin');
                    $email = $this->input->post('email');
                    $jabatan = $this->input->post('jabatan');
                    $level = $this->input->post('level');
                    $no_ktp = $this->input->post('no_ktp');
                    $data = array('upload_data' => $this->upload->data());
                    print_r($this->upload->data());
                    $datafoto=$this->upload->data();
                    $nm_file = $datafoto['orig_name'];
                    $data = array(
                        'id_karyawan' => $id_karyawan,
                        'nama_user' => $nama_user,
                        'username' => $username,
                        'alamat' => $alamat,
                        'jenis_kelamin' => $jenis_kelamin,
                        'email' => $email,
                        'jabatan' => $jabatan,
                        'level' => $level,
                        'no_ktp' => $no_ktp,
                        'foto' => $nm_file
                        );
                    $where = array(
                        'id_karyawan' => $id_karyawan
                        );
                    $image_path = './foto/';
                    $query_get_image = $this->db->get_where('tbl_user', array('id_karyawan' => $id_karyawan));
                    foreach ($query_get_image->result() as $record)
                    {
                    // delete file, if exists...
                        $filename = $image_path . $record->foto;
                        unlink($filename);
                    }
                    $this->m_data->update_data($where,$data,'tbl_user');
                    redirect('admin');
                }
            }
        }
    }

    // HAPUS DATA

    public function hapus_data_karyawan($id_karyawan)
    {
        $where = array('id_karyawan' => $id_karyawan);
        $this->m_data->hapus_data_karyawan($where,'tbl_user');
        redirect('admin');
    }

    public function hapus_data_cuti($id_cuti)
    {
        $where = array('id_cuti' => $id_cuti);
        $this->m_data->hapus_data_cuti($where,'tbl_cuti');
        redirect('admin/pengajuan_cuti');
    }

} 
