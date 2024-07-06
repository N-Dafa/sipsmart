<?php 
class HasilPanen extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_panen');
		$this->load->helper('url');
        $this->load->library('form_validation');

	}
	function index(){
		$data['panen'] = $this->m_panen->tampil_data()->result();
		$this->load->view('view-panen',$data);
	}
	function tambah(){
		$this->load->view('panen-input');
	}
	function tambah_aksi(){
		$tanggal = $this->input->post('tanggal');
		$jenis_padi = $this->input->post('jenis_padi');
		$hasil_panen = $this->input->post('hasil_panen');
		$hari = $this->input->post('hari');
		$berat = $this->input->post('berat');
		$data = array(
			'tanggal' => $tanggal,
			'jenis_padi' => $jenis_padi,
			'hasil_panen' => $hasil_panen,
			'hari' => $hari,
			'berat' => $berat
			);
		$this->m_panen->input_data($data,'panen');
		redirect('hasilpanen');
	}
    function hapus($id){
		$where = array('id' => $id);
		$this->m_panen->hapus_data($where,'panen');
		redirect('hasilpanen');
	}
    function edit($id){
        $where = array('id' => $id);
        $data['panen'] = $this->m_panen->edit_data($where,'panen')->result();
        $this->load->view('panen-edit',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $jenis_padi = $this->input->post('jenis_padi');
        $hasil_panen = $this->input->post('hasil_panen');
		$hari = $this->input->post('hari');
        $berat = $this->input->post('berat');
        $data = array(
            'tanggal' => $tanggal,
			'jenis_padi' => $jenis_padi,
            'hasil_panen' => $hasil_panen,
			'hari' => $hari,
            'berat' => $berat
        );
        $where = array(
            'id' => $id
        );
        $this->m_panen->update_data($where,$data,'panen');
        redirect('hasilpanen');
    }
    function batal(){
        redirect('hasilpanen');
	}
}