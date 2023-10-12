<?php

class BukuModel extends CI_Model //membuat sebuah model aplikasi web
{
    function __construct() //inisialisaasi dasar code igniter
    {
        parent::__construct();
    }

    function get_data_buku() //mengambil data dari tabel bryanperpustakaan dalam database
    {
        return $this->db->get('bryan_buku')->result();
        //SELECT * FROM bryanperpustakaan
    }

    function insert_data_buku($data) //untuk insert data perpustakaan ke dalam tabel bryanperpustakaan dalam database
    {
        $insert_data = array(
            'id_buku' => $data['id_buku'],
            'judul_buku' => $data['judul_buku'],
            'pengarang' => $data['pengarang'],
            'tahun_terbit' => $data['tahun_terbit'],
            'kategori' => $data['kategori']
        );

        $this->db->insert('bryan_buku', $insert_data);
    }
}
