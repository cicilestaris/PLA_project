<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class link_model extends CI_Model {

	function __construct(){
			parent::__construct();
		}

		function get_link_statis(){
			$this->db->select('*');
			$this->db->from('link_statis');
			return $this->db->get();
		}

		function get_lokasi(){
			$this->db->select('*');
			$this->db->from('lokasi');
			return $this->db->get();
		}

		function get_ne($id){
			$this->db->select('*');
			$this->db->from('ne');
			$this->db->where('id_lokasi',$id);
			return $this->db->get();
		}

		function insert_link($data){
			$this->db->insert('link_statis', $data);
		}

		function delete_link($id_link){
			$this->db->where('id_link', $id_link);
			$this->db->delete('link_statis');
			if($this->db->affected_rows()==1){
				return TRUE;
			}
			return FALSE;
		}

}

/* End of file employee.php */
/* Location: ./application/models/employee.php */