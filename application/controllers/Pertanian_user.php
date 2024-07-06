<?php
class pertanian_user extends CI_Controller {
    public function index(){
        $this->load->view('user/view-pertanian');
        $this->load->library('form_validation');
    }
}