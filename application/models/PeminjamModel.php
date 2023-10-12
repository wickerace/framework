<?php

class PeminjamModel extends CI_Model //membuat sebuah model aplikasi web
{
    function __construct() //inisialisaasi dasar code igniter
    {
        parent::__construct();
    }

    function get_data_peminjam() //mengambil data dari tabel bryanperpustakaan dalam database
    {
        $this->db->join('bryan_buku', 'bryan_peminjam.id_buku = bryan_buku.id_buku', 'left');
        return $this->db->get('bryan_peminjam')->result();
        //SELECT * FROM bryanperpustakaan
    }

    function insert_data_peminjam($data) //untuk insert data perpustakaan ke dalam tabel bryanperpustakaan dalam database
    {
        $insert_data = array(
            'id_peminjam' => $data['id_peminjam'],
            'nama_peminjam' => $data['nama_peminjam'],
            'id_buku' => $data['id_buku'],
            'alamat' => $data['alamat'],
            'tgl_pinjam' => $data['tgl_pinjam'],
            'tgl_kembali' => $data['tgl_kembali']
        );

        $this->db->insert('bryan_peminjam', $insert_data);
    }
}
