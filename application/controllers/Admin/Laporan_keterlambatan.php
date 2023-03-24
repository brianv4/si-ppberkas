<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_keterlambatan extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Keterlambatan";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan_keterlambatan');
        $this->load->view('templates/footer');
    }
}
