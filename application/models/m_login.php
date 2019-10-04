<?php
class M_login extends CI_Model{
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password=MD5('$password') AND level='admin' LIMIT 1");
        return $query;
    }
 
    function auth_pimpinan($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password=MD5('$password') AND level='pimpinan' LIMIT 1");
        return $query;
    }

    function auth_user($username,$password){
        $query=$this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password=MD5('$password') AND level='user' LIMIT 1");
        return $query;
    }
 
}
