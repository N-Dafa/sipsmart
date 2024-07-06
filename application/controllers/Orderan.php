<?php
class orderan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesan');
		$this->load->helper('url');
        $this->load->library('form_validation');
	}
	function index(){
		$data['pesan'] = $this->m_pesan->tampil_data_pesan()->result();
		$this->load->view('view-order',$data);
	}
}