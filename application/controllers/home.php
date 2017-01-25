<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('tn_model');
		$this->load->library('csvimport');
	}

	public function index(){
	
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		
		$this->load->view('admin/index',$data);
		
	}

	public function table_nms(){
		$this->load->database();
		$jumlah_data = $this->tn_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/home/table_nms';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['port'] = $this->tn_model->data($config['per_page'],$from);
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables_nms', $data);
	}

	public function tables_link_statis(){
		$data['link_statis'] = $this->tn_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);
	}
	public function table_perangkat(){
		
		$data['link_statis'] = $this->tn_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);
	}

	public function insert_single_nms(){
		$this->load->view('admin/nms/insert_single_nms');
	}
	public function insert_double_nms(){
		$this->load->view('admin/nms/insert_double_nms');
	}
	public function edit_nms($id_port){

		$data['port']=$this->tn_model->get_port_by_id($id_port)->row();
		$data['merk']=$this->tn_model->get_merk()->result();

		$this->load->view('admin/nms/edit_nms',$data);

	}

	 public function proses_edit_nms(){
	 	$data['id_port'] = $this->input->post('id_port');
	 	$data['nama_nms'] = $this->input->post('nama_nms');
        $data['nama_lokasi'] = $this->input->post('nama_lokasi');
        $data['id_merk']=$this->input->post('id_merk');
        $data['nama_ne']=$this->input->post('nama_ne');
        $data['rack']=$this->input->post('rack');
        $data['shelf']=$this->input->post('shelf');
        $data['slot']=$this->input->post('slot');
        $data['port']=$this->input->post('port');
        $data['board']=$this->input->post('board');
        $data['frekuensi']=$this->input->post('frekuensi');
        $data['user']=$this->input->post('user');
        $data['deskripsi']=$this->input->post('deskripsi');
        $id_port=$this->input->post('id_port');
        $this->tn_model->update_port($id_port, $data);
      	  //redirect(site_url().'/Home');
   		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables_nms', $data);
	
		
	 }

	 function insert_nms($id_port){
		$this->load->view('admin/nms/insert_single_nms');
	}	
	
	public function proses_insert_nms(){
        $data['id_port'] = $this->input->post('id_port');
		$data['nama_nms'] = $this->input->post('nama_nms');
        $data['nama_lokasi'] = $this->input->post('nama_lokasi');
        $data['id_merk']=$this->input->post('id_merk');
        $data['nama_ne']=$this->input->post('nama_ne');
        $data['rack']=$this->input->post('rack');
        $data['shelf']=$this->input->post('shelf');
        $data['slot']=$this->input->post('slot');
        $data['port']=$this->input->post('port');
        $data['board']=$this->input->post('board');
        $data['frekuensi']=$this->input->post('frekuensi');
        $data['user']=$this->input->post('user');
        $data['deskripsi']=$this->input->post('deskripsi');
		$this->tn_model->insert_port($data);

        $data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables_nms', $data);
    }

	 public function delete_nms($id_port){
	 	$this->tn_model->delete_nms($id_port);
		$data['port'] = $this->tn_model->get_port()->result();
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/nms/tables_nms', $data);
	
	 }

		public function insert_single_perangkat(){
		$this->load->view('admin/perangkat/insert_single_perangkat');
	}

	public function insert_double_perangkat(){
		$this->load->view('admin/perangkat/insert_double_perangkat');
	}
	public function edit_perangkat(){
		$this->load->view('admin/perangkat/edit_perangkat');
	}
	
	 function importcsv() {
        $data['addressbook'] = $this->tn_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '5000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('admin/nms/tables_nms', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $data = array(
                        'id_port'=>$row['id_port'],
                        'nama_nms'=>$row['nama_nms'],
                        'nama_lokasi'=>$row['nama_lokasi'],
                        'id_merk'=>$row['id_merk'],
                        'nama_ne'=>$row['nama_ne'],
                        'rack'=>$row['rack'],
                        'shelf'=>$row['shelf'],
                        'slot'=>$row['slot'],
                        'port'=>$row['port'],
                        'board'=>$row['board'],
                        'frekuensi'=>$row['frekuensi'],
                        'user'=>$row['user'],
                        'deskripsi'=>$row['deskripsi'],

                    );
                    $this->tn_model->insert_csv($data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');

               $data['port'] = $this->tn_model->get_port()->result();
				$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
				$this->load->view('admin/nms/tables_nms', $data);
	
            } else 
                $data['error'] = "Error occured";
                $this->load->view('admin/nms/tables_nms', $data);
            }
 
        } 
		
		//REPORT
		public function table_report(){
		$this->load->database();
		$jumlah_data = $this->tn_model->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/home/table_report';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['port'] = $this->tn_model->data($config['per_page'],$from);
		$data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
		$this->load->view('admin/report/tables_report', $data);
	}
	
		//DOWNLOAD REPORT
		public function exportcsv() {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "datektransport.xls";
        $query = "SELECT * FROM port WHERE tn_model = 'DUMAI'";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
	}

        
}
