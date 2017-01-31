<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}

		function get_link_by_id($id){
			$this->db->select('*');
			$this->db->from('link_statis');
			$this->db->where('id_link',$id);
			return $this->db->get();
		}
	
		// FUNGSI PAGINATION REPORT
		function data($number,$offset){
			return $query = $this->db->get('link_statis',$number,$offset)->result();		
		}
		function jumlah_data(){
			return $this->db->get('link_statis')->num_rows();
		}

		//FUNGSI DOWNLOAD REPORT
		function export_csv($data){
			$this->db->export('link_statis', $data);
		}

		//FUNGSI SEARCHING REPORT
		function tampil(){
			$query = $this->db->get('link_statis');
			return $query->result(); 
		}
		function caridata(){
			$c = $this->input->POST('cari');
			$this->db->like('host_a', $c);
			/*$this->db->or_like('host_b', $c);
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