<?php 
class admin extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->library('form_validation');

	}
	function index(){
		$data['dt_admin'] = $this->m_data->tampil_data()->result();
		$this->load->view('view-admin',$data);
	}
	function tambah(){
		$this->load->view('view-input');
	}
	function tambah_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$pass = $this->input->post('pass');
		$h_pass = md5($pass);
		$h_nim = md5($nim);
		$data = array(
			'id' => $id,
			'nama' => $nama,
			'nim' => $h_nim,
			'pass' => $h_pass
			);
		$this->m_data->input_data($data,'dt_admin');
		redirect('admin');
	}
    function hapus($nim){
		$where = array('nim' => $nim);
		$this->m_data->hapus_data($where,'dt_admin');
		redirect('admin');
	}
    function edit($nim){
        $where = array('nim' => $nim);
        $data['dt_admin'] = $this->m_data->edit_data($where,'dt_admin')->result();
        $this->load->view('view-edit',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $pass = $this->input->post('pass');
        $data = array(
            'nama' => $nama,
            'pass' => $pass
        );
        $where = array(
            'nim' => $nim
        );
        $this->m_data->update_data($where,$data,'dt_admin');
        redirect('admin');
    }
    function batal(){
        redirect('admin');
	}
}