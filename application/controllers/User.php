<?php
class user extends CI_Controller {
    public function index(){
        $this->load->view('user/view-fp-user');
        $this->load->library('form_validation');
    }
}