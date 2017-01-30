<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('link_model');
		$this->load->helper(array('url','form'));

		
		
	}

	public function index(){
	
		$data['lokasi'] = $this->link_model->get_lokasi()->result();
		$data['link_statis'] = $this->link_model->get_link_statis()->result();
		$this->load->view('admin/perangkat/tables_perangkat', $data);

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
       	$data['nms']="SBCS";
        $data['ne_a']=$this->input->post('ne');
        $data['board_a']=$this->input->post('board');
        $data['shelf_a']=$this->input->post('shelf');
        $data['slot_a']=$this->input->post('slot');
        $data['port_a']=$this->input->post('port');
        $data['ne_b']=$this->input->post('neB');
        $data['board_b']=$this->input->post('boardB');
        $data['shelf_b']=$this->input->post('shelfB');
        $data['slot_b']=$this->input->post('slotB');
        $data['port_b']=$this->input->post('portB');

		$this->link_model->insert_link($data);

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