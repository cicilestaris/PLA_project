<?php
class admin_model extends CI_Model {
     function __construct(){
         parent::__construct();
     }
    // cek keberadaan user di sistem
    function check_admin_account($username, $password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
       
        return $this->db->get();
    }
// mengambil data user tertentu
   function get_admin($id_admin){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);
       
        return $this->db->get();
    }
}