<?php
class contact extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-contact.php');
        $this->load->library('form_validation');
    }
}