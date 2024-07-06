<?php
class Beranda extends CI_Controller {
    public function index(){
        $this->load->view('view-beranda.php');
        $this->load->library('form_validation');
    }
}