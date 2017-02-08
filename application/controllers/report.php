<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('report_model');
		$this->load->library('pagination');
	}
	
		//REPORT
		public function index(){

			if(isset($_SESSION['x'])){
				unset($_SESSION['x']);
			}
			
			$this->load->database();
			$jumlah_data = $this->report_model->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/report/index';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 10;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);

			$data['link_statis'] = $this->report_model->data($config['per_page'],$from);
			$this->load->view('admin/report/tables_report', $data);
		}
		
		/*public function download_report(){
			$this->load->view('admin/report/download_report');
		}*/
	
		//DOWNLOAD CSV REPORT
		public function exportcsv() {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";

        $filename = "datektransport.csv";
        $query = "SELECT * FROM link_statis";

        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
		}

		//SEARCH REPORT
		public function cari(){
			$data['link_statis']=$this->report_model->caridata();
			//jika data yang dicari tidak ada maka akan keluar informasi 
			//bahwa data yang dicari tidak ada
			if($data['link_statis']==null) {
				print 'maaf data yang anda cari tidak ada atau keywordnya salah  ';
				print anchor('report','kembali');
			}else{
				$this->load->database();
				$jumlah_data = $this->report_model->jumlah_data();
				$this->load->library('pagination');
				$config['base_url'] = base_url().'index.php/report/table_report';
				$config['total_rows'] = $jumlah_data;
				$config['per_page'] = 10;
				$from = $this->uri->segment(3);
				$this->pagination->initialize($config);
				
				$c = $_POST['cari'];
				$this->session->set_userdata('x',$c);
				
				$data2['link_statis'] = $this->report_model->data($config['per_page'],$from);
				$this->load->view('admin/report/tables_report',$data);
			}
		}
	
		/*public function report_cari($host_a){
			$data['link_statis']=$this->report_model->get_link_by_host($host_a)->row();
			$this->load->view('admin/report/download_report',$data);
		}*/

		/*public function proses_report_cari(){
			$data['id_link'] = $this->db->post('id_link');
			$data['host_a'] = $this->input->post('host_a');
			$data['host_b'] = $this->input->post('host_b');
			$data['fa_a']=$this->input->post('fa_a');
			$data['fa_b']=$this->input->post('fa_b');
			$data['nms']=$this->input->post('nms');
			
			$data['ne_a']=$this->input->post('ne_a');
			$data['board_a']=$this->input->post('board_a');
			$data['shelf_a']=$this->input->post('shelf_a');
			$data['slot_a']=$this->input->post('slot_a');
			$data['port_a']=$this->input->post('port_a');
			
			$data['ne_b']=$this->input->post('ne_b');
			$data['board_b']=$this->input->post('board_b');
			$data['shelf_b']=$this->input->post('shelf_b');
			$data['slot_b']=$this->input->post('slot_b');
			$data['port_b']=$this->input->post('port_b');
			
			$host_a=$this->input->post('host_a');
			$this->report_model->report($host_a, $data);
			
			$data['link_statis'] = $this->report_model->get_link_statis()->result();
			$this->load->view('admin/report/download_report', $data);
		}*/
		
		/*public function proses_report_cari(){
			$data['id_link'] = $this->db->get('id_link');
			$data['host_a'] = $this->db->get('host_a');
			$data['host_b'] = $this->db->get('host_b');
			$data['fa_a']=$this->db->get('fa_a');
			$data['fa_b']=$this->db->get('fa_b');
			$data['nms']=$this->db->get('nms');
			
			$data['ne_a']=$this->db->get('ne_a');
			$data['board_a']=$this->db->get('board_a');
			$data['shelf_a']=$this->db->get('shelf_a');
			$data['slot_a']=$this->db->get('slot_a');
			$data['port_a']=$this->db->get('port_a');
			
			$data['ne_b']=$this->db->get('ne_b');
			$data['board_b']=$this->db->get('board_b');
			$data['shelf_b']=$this->db->get('shelf_b');
			$data['slot_b']=$this->db->get('slot_b');
			$data['port_b']=$this->db->get('port_b');
			
			$host_a=$this->db->get('host_a');
			$this->report_model->report($host_a, $data);
			
			$data['link_statis'] = $this->report_model->get_link_statis()->result();
			$this->load->view('admin/report/download_report', $data);
		}*/
}