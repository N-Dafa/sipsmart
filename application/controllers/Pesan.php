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
		$id_user = $this->input->post('id_user');
		$id_padi = $this->input->post('id_padi');
		$tanggal = $this->input->post('tanggal');
		$deskripsi = $this->input->post('deskripsi');
		$harga_beli = $this->input->post('harga_beli');
		$jumlah = $this->input->post('jumlah');
		$transaksi = $this->input->post('transaksi');
		$proses = $this->input->post('proses');
		$nomorhp = $this->input->post('nomorhp');
		$address = $this->input->post('address');
		$data = array(
			'id_pesan' => $id_pesan,
			'id_user' => $id_user,
			'id_padi' => $id_padi,
			'tanggal' => $tanggal,
			'deskripsi' => $deskripsi,
			'harga_beli' => $harga_beli,
			'jumlah' => $jumlah,
			'transaksi' => $transaksi,
			'proses' => $proses,
			'nomorhp' => $nomorhp,
			'alamat' => $address,
			);
		$this->m_pesan->input_data($data,'pesan');
		redirect('pesan');
	}
	function tambah_proses(){
        $nim = $this->input->post('id_pesan');
		$proses = $this->input->post('proses');
		$data = array(
		'proses' => $proses,
		);
        $where = array(
            'id_pesan' => $nim
        );
		$this->m_pesan->update_data($where,$data,'pesan');
		redirect('orderan');
	}
}