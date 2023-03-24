<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Petugas extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Petugas";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_petugas');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Petugas";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_petugas');
        $this->load->view('templates/footer');
    }
}
