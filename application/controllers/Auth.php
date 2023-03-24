<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Login";
        $this->load->view('templates/header_login', $data);
        $this->load->view('login');
        $this->load->view('templates/footer_login');
    }
}
