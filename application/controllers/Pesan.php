<?php 
class pesan extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesan');
		$this->load->helper('url');
        $this->load->library('form_validation');
	}
	function index(){
		$data['padi'] = $this->m_pesan->tampil_data()->result();
		$this->load->view('user/view-padi',$data);
	}
	function tambah_aksi(){
		$id_pesan = $this->input->post('id_pesan');
		$tanggal = $this->input->post('tanggal');
		$deskripsi = $this->input->post('deskripsi');
		$jumlah = $this->input->post('jumlah');
		$transaksi = $this->input->post('transaksi');
		$proses = $this->input->post('proses');
		$data = array(
			'id_pesan' => $id_pesan,
			'tanggal' => $tanggal,
			'deskripsi' => $deskripsi,
			'jumlah' => $jumlah,
			'transaksi' => $transaksi,
			'proses' => $proses,
			);
		$this->m_pesan->input_data($data,'pesan');
		redirect('pesan');
	}
	function tambah_proses(){
		$proses = $this->input->post('proses');
		$data = array(
		'proses' => $proses,
		);
		$this->m_pesan->update_data($data,'pesan');
		redirect('orderan');
	}
}