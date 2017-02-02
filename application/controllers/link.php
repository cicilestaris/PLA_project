<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('link_model');
        $this->load->model('tn_model');
		$this->load->helper(array('url','form'));
        $this->load->library('csvimport');
        $this->load->library('session');
		
	}

      function importcsv_link() {
        $data2['addressbook'] = $this->tn_model->get_addressbook_link();
        $data2['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '5000';
 
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data2['error'] = $this->upload->display_errors();
 
            $this->load->view('admin/perangkat/tables_perangkat', $data2);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './upload/'.$file_data['file_name'];
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $roww) {
                    $data2 = array(
                        'id_link'=>$roww['id_link'],
                        'host_a'=>$roww['host_a'],
                        'host_b'=>$roww['host_b'],
                        'fa_a'=>$roww['fa_a'],
                        'fa_b'=>$roww['fa_b'],
                        'nms'=>$roww['nms'],
                        'ne_a'=>$roww['ne_a'],
                        'board_a'=>$roww['board_a'],
                        'rack_a'=>$roww['rack_a'],
                        'shelf_a'=>$roww['shelf_a'],
                        'slot_a'=>$roww['slot_a'],
                        'port_a'=>$roww['port_a'],
                        'freq_a'=>$roww['freq_a'],
                        'ne_b'=>$roww['ne_b'],
                        'board_b'=>$roww['board_b'],
                        'rack_b'=>$roww['rack_b'],
                        'shelf_b'=>$roww['shelf_b'],
                        'slot_b'=>$roww['slot_b'],
                        'port_b'=>$roww['port_b'],
                        'freq_b'=>$roww['freq_b'],

                    );
                    $this->tn_model->insert_csv_link($data2);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');

               // $data2['link_statis'] = $this->tn_model->get_link_statis()->result();
               //  // $data['merk'] = $this->tn_model->get_merk_by_id($data['port'][0]->id_merk)->result();
               //  $this->load->view('admin/perangkat/tables_perangkat', $data2);
                redirect(site_url('link'));
    
            } else 
                $data2['error'] = "Error occured";
                $this->load->view('admin/perangkat/tables_perangkat', $data2);
            }
 
        } 

	public function index(){
	
		$data['lokasi'] = $this->link_model->get_lokasi()->result();
		$data['link_statis'] = $this->link_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);

	}

    public function insert_jalur(){
       $data['jumlah_jalur'] =  $this->input->post('jalur');
  
       $data['lokasi'] = $this->link_model->get_lokasi()->result();
       $data['link_statis'] = $this->link_model->get_link_statis()->result();
       $data['port']= $this->tn_model->get_nms()->result();
      
        $this->load->view('admin/perangkat/create_link', $data);

    }

    public function insert_double_perangkat(){
        $this->load->view('admin/perangkat/insert_double_perangkat');
    }

	public function ne(){
        $lokasi = $this->input->post('nama_lokasi');
        $data['ne'] = $this->link_model->get_ne($lokasi)->result();
        $this->load->view('admin/perangkat/tables_perangkat', $data);
        
    }

    public function create_link(){
       // $data['id_port'] = $this->input->post('id_port');
		$data['host_a'] = $this->input->post('host_a');
        $data['host_b'] = $this->input->post('host_b');
        $data['fa_a']=$this->input->post('fa_a');
        $data['fa_b']=$this->input->post('fa_b');
       	$data['nms']=$this->input->post('nama_nms');;
        $data['ne_a']=$this->input->post('ne1');
        $data['board_a']=$this->input->post('board1');
        $data['shelf_a']=$this->input->post('shelf1');
        $data['slot_a']=$this->input->post('slot1');
        $data['port_a']=$this->input->post('port1');
        $data['ne_b']=$this->input->post('ne2');
        $data['board_b']=$this->input->post('board2');
        $data['shelf_b']=$this->input->post('shelf2');
        $data['slot_b']=$this->input->post('slot2');
        $data['port_b']=$this->input->post('port2');

		$this->link_model->insert_link($data);

      	$data['lokasi'] = $this->link_model->get_lokasi()->result();
		$data['link_statis'] = $this->link_model->get_link_statis()->result();
		
			redirect(site_url('link'));

    }

     public function delete_link($id_link){
        $this->link_model->delete_link($id_link);
        $data['lokasi'] = $this->link_model->get_lokasi()->result();
        $data['link_statis'] = $this->link_model->get_link_statis()->result();
          redirect(site_url('link'));
 
   }

    

/*	 function siswa()
    {
        $id = $this->input->post('id_ne');
        $data['ne'] = $this->link_model->get_ne($id);
        $this->load->view('admin/perangkat/ne',$data);
    }
*/
}