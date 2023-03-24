<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('templatespj/header', $data);
        $this->load->view('templatespj/sidebar');
        $this->load->view('templatespj/topbar', $data);
        $this->load->view('penanggungjawab/dashboard');
        $this->load->view('templatespj/footer');
    }
}
