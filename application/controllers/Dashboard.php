<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('PeminjamModel');
    }

    function index()
    {
        $data['title'] = "DASHBOARD";
        $data['judul'] = "Data Perpustakaan";
        $data['bryan_peminjam'] = $this->PeminjamModel->get_data_peminjam();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('komponen/footer');
    }
}
