<?php

/**
 * 
 */
class M_data extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
	// DATA LIST CUTI

	function jumlah_data($table){
        return $this->db->get($table)->num_rows();
    }

    function tampil_data($table, $number,$offset){
        $this->db->order_by("id_cuti", "desc");
        $query = $this->db->get($table,$number,$offset);
        return $query->result();
    }

     function tampil_data2($table, $number,$offset){
        $this->db->query('select * from tbl_user where username = "'.$this->session->set_userdata('ses_nama',$data3['username']).'"');
    }

    function hapus_data_cuti($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    // DATA ADMIN

    function jumlah_data_admin($table){
        return $this->db->get($table)->num_rows();
    }

    function tampil_data_admin($table, $number,$offset){
        $this->db->where('level', 'admin');
        return $this->db->get($table,$number,$offset)->result();
    }

    // DATA PIMPINAN

    function jumlah_data_pimpinan($table){
        return $this->db->get($table)->num_rows();
    }

    function tampil_data_pimpinan($table, $number,$offset){
        $this->db->where('level', 'pimpinan');
        return $this->db->get($table,$number,$offset)->result();
    }

    // DATA KARYAWAN

    function jumlah_data_karyawan($table){
        return $this->db->get($table)->num_rows();
    }

    function tampil_data_karyawan($table, $number,$offset){
        $this->db->where('level', 'user');
        return $this->db->get($table,$number,$offset)->result();
    }

    // CRUD KARYAWAN

    function single_data($where,$table){       
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function hapus_data_karyawan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }


      /*
       SELECT * FROM atlet
       INNER JOIN prestasi
       ON atlet.id_atlet = prestasi.id_atlet
       WHERE prestasi.id_atlet = '" . $id_atlet ."' ORDER BY tanggal DESC 
      */

       

    // DETAIL

    function detail_cuti_v1($id)
    {
        $param = array('imei_hp' => $id );
        return $this->db->get_where('tbl_user',$param);
    }

    function detail($where,$table){     
        return $this->db->get_where($table,$where);
    }

    function detail_cuti($where,$table){  
        return $this->db->get_where($table,$where);   
        return $this->db->query('SELECT * FROM tbl_cuti
                               INNER JOIN tbl_user
                               ON tbl_user.id_karyawan = tbl_cuti.id_karyawan
                               ');
        
    } 
        
    function detail_cuti3($where, $table) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_cuti','tbl_user.id_karyawan = tbl_cuti.id_karyawan');
        return $this->db->get_where($table,$where);
    } 

    function detail_cuti4($id_karyawan)
    {  
        $this->db->select("*");
        $this->db->from('tbl_user');
        $this->db->where('tbl_cuti.id_karyawan', $id_karyawan);
        $this->db->join('tbl_cuti','tbl_user.id_karyawan=tbl_cuti.id_karyawan');
        return $this->db->get();    
    }        
         

    // INPUT DATA USER

    function input_data_user($data,$table){
        $this->db->insert($table,$data);
    }

    // PiMPINAN

    function single_data_cuti($where,$table){       
        return $this->db->get_where($table,$where);
    }

    function update_cuti($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    // INPUT DATA CUTI

    function tambah_cuti($data,$table){
        $this->db->insert($table,$data);
    }
        
}