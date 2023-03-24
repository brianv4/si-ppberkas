<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Poli extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Poli";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_poli');
        $this->load->view('templates/footer');
    }
}
