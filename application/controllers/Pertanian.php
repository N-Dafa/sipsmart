<?php
class pertanian extends CI_Controller {
    public function index(){
        $this->load->view('view-pertanian');
        $this->load->library('form_validation');
    }
}