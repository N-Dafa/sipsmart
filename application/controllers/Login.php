<?php
class login extends CI_Controller {
    public function index(){
        $this->load->view('login/view-login');
		$this->load->model('M_login');
        $this->load->library('form_validation');
    }
    public function cek_login() {
        $nim = $this->input->post('nim');
        $pass = $this->input->post('pass');
        
        // Hash the entered password using MD5
        $h_pass = md5($pass);

        // Load model
        $this->load->model('m_login');

        // Check login
        $result = $this->m_login->login($nim, $h_pass);

        if ($result) {
            // Set session and redirect to dashboard
            $this->session->set_userdata('nim', $nim);
            redirect('dashboard');
        } else {
            // Redirect to login with error
            $this->session->set_flashdata('error', 'Invalid NIM or Password');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}