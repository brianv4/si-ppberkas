<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Kelengkapan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Kelengkapan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan_kelengkapan');
        $this->load->view('templates/footer');
    }
}
