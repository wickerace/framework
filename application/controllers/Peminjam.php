<?php

class Peminjam extends CI_Controller //membuat sebuah controller untuk aplikasi web
{
    function __construct() //memastikan bahwa konstruktor class ini dijalankan dengan benar
    {
        parent::__construct();
        $this->load->model('PeminjamModel');
        $this->load->model('BukuModel');
    }

    //menampilkan data perpustakaan
    function index()
    {
        $data['judul'] = "Data Peminjam";
        $data['title'] = "DATA PEMINJAM BUKU";
        $data['Datapeminjam'] = $this->PeminjamModel->get_data_peminjam();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('v_perpustakaan', $data);
        $this->load->view('komponen/footer');
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_peminjam = $this->input->post();
            $result = $this->PeminjamModel->insert_data_peminjam($data_input_peminjam);
            
            if ($result > 0) {
                //sukses
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                Success! Data berhasil disimpan
              </div>
              ');
            } else {
                //error
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Error! Data gagal disimpan
              </div>
              ');
            }
            redirect('peminjam/index');
        } else {
            $data['title'] = "MASUKKAN DATA PEMINJAM";
            // $data['judul'] = "INPUT DATA PEMINJAM";
            $data['buku'] = $this->BukuModel->get_data_buku();
            $this->load->view('komponen/header', $data);
            $this->load->view('komponen/sidebar', $data);
            $this->load->view('v_form_peminjam', $data);
            $this->load->view('komponen/footer');
        }
    }

    function delete($id_peminjam)
    {
        $this->PeminjamModel->delete($id_peminjam);
        redirect('peminjam/index');
    }
}
