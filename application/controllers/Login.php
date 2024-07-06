<?php
class login extends CI_Controller {
    public function index(){
        $this->load->view('login/view-login');
        $this->load->library('form_validation');
    }
}