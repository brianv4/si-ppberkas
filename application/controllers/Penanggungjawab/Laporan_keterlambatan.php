<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_keterlambatan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Keterlambatan";
        $this->load->view('templatespj/header', $data);
        $this->load->view('templatespj/sidebar');
        $this->load->view('templatespj/topbar', $data);
        $this->load->view('admin/laporan_keterlambatan');
        $this->load->view('templatespj/footer');
    }
}
