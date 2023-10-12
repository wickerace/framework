<?php

class Buku extends CI_Controller //membuat sebuah controller untuk aplikasi web
{
    function __construct() //memastikan bahwa konstruktor class ini dijalankan dengan benar
    {
        parent::__construct();
        $this->load->model('BukuModel');
    }

    //menampilkan data perpustakaan
    function index()
    {
        $data['judul'] = "Data Buku";
        $data['title'] = "DAFTAR BUKU";
        $data['databuku'] = $this->BukuModel->get_data_buku();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('v_buku', $data);
        $this->load->view('komponen/footer');
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_buku = $this->input->post();
            //print_r($data_input_user);
            //exit;
            $this->BukuModel->insert_data_buku($data_input_buku);
            redirect('peminjam/index');
        } else {
            $data['title'] = "MASUKKAN DATA BUKU";
            $this->load->view('komponen/header', $data);
            $this->load->view('komponen/sidebar', $data);
            $this->load->view('v_form_buku', $data);
            $this->load->view('komponen/footer');
        }
    }
}
