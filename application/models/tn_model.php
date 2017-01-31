<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tn_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		//cek keberadaan user di sistem
		function get_port(){
			$this->db->select('*');
			$this->db->from('port');
			return $this->db->get();
		}

			function get_merk(){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}

			function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}
		
		function get_merk_by_id($id){
			$this->db->select('*');
			$this->db->from('merk');
			return $this->db->get();
		}
		function get_port_by_id($id){
			$this->db->select('*');
			$this->db->from('port');
			$this->db->where('id_port',$id);
			return $this->db->get();
		}

		function get_link_by_id($id){
			$this->db->select('*');
			$this->db->from('link_statis');
			$this->db->where('id_link',$id);
			return $this->db->get();
		}

 	 function get_addressbook() {     
        $query = $this->db->get('port');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }

     function get_addressbook_link() {     
        $query = $this->db->get('link_statis');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv($data) {
        $this->db->insert('port', $data);
    }

     function insert_csv_link($data2) {
        $this->db->insert('link_statis', $data2);
    }
	 
	// function pagination NMS
	function data($number,$offset){
		return $query = $this->db->get('port',$number,$offset)->result();		
	}
	function jumlah_data(){
		return $this->db->get('port')->num_rows();
	}
	
	// function pagination REPORT
	function data2($number,$offset){
		return $query = $this->db->get('link_statis',$number,$offset)->result();		
	}
	function jumlah_data2(){
		return $this->db->get('link_statis')->num_rows();
	}

    //update port
    function update_port($id_port, $data){
			$this->db->where('id_port', $id_port);
			$this->db->update('port', $data);
	}

	//delete port
	function delete_nms($id_port){
		$this->db->where('id_port',$id_port);
		$this->db->delete('port');
		if($this->db->affected_rows()==1){
			return TRUE;
		}
		return FALSE;
	}

	//function insert port
	function insert_port($data){
			$this->db->insert('port', $data);
	}

	//FUNGSI DOWNLOAD REPORT
	function export_csv($data2){
        $this->db->export('link_statis', $data2);
    }

	//FUNGSI SEARCHING REPORT
	function tampil(){
		$query = $this->db->get('link_statis');
		return $query->result(); 
	}
	function caridata(){
		$c = $this->input->POST('cari');
		$this->db->like('host_a', $c);
		/*$this->db->or_like('nama_lokasi', $c);
		$this->db->or_like('nama_ne', $c);
		$this->db->or_like('frekuensi', $c);
		$this->db->or_like('board', $c);
		$this->db->or_like('frekuensi', $c);*/
		$query = $this->db->get('link_statis');
		return $query->result(); 
	}
}

/* End of file employee.php */
/* Location: ./application/models/employee.php */