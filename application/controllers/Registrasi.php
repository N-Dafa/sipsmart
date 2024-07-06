<?php
class registrasi extends CI_Controller {
    public function index(){
        $this->load->view('login/view-regis.php');
        $this->load->library('form_validation');
    }
}