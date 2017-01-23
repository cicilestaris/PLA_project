<?php
 
class Csv extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('tn_model');
        $this->load->library('csvimport');
    }
 
    function index() {
        $data['addressbook'] = $this->tn_model->get_addressbook();
        $this->load->view('admin/nms/tables_nms', $data);
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
                        'nama_lokasi'=>$row['lokasi'],
                        'id_merk'=>$row['id_merk'],
                        'nama_ne'=>$row['nama_ne'],
                        'rack'=>$row['rack'],
                        'shelf'=>$row['shelf'],
                        'slot'=>$row['slot'],
                        'port'=>$row['port'],
                        'board'=>$row['board'],
                        'frekuensi'=>$row['frekuensi'],
                        'deskripsi'=>$row['deskripsi'],

                    );
                    $this->tn_model->insert_csv($data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('admin/nms/tables_nms', $data);
            }
 
        } 
 
}