<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Kembali extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Pengembalian";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_kembali');
        $this->load->view('templates/footer');
    }
}
