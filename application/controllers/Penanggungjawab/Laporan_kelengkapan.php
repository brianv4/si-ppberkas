<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Kelengkapan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Kelengkapan";
        $this->load->view('templatespj/header', $data);
        $this->load->view('templatespj/sidebar');
        $this->load->view('templatespj/topbar', $data);
        $this->load->view('penanggungjawab/laporan_kelengkapan');
        $this->load->view('templatespj/footer');
    }
}
