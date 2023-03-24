<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_RM extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Data Rekam Medis";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_rm');
        $this->load->view('templates/footer');
    }
    public function history()
    {
        $data['title'] = "Data History Rekam Medis";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_history');
        $this->load->view('templates/footer');
    }
}
