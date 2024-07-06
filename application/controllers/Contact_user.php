<?php
class contact_user extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/view-contact.php');
        $this->load->library('form_validation');
    }
}