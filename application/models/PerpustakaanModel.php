<?php

class PerpustakaanModel extends CI_Model //membuat sebuah model aplikasi web
{
    function __construct() //inisialisaasi dasar code igniter
    {
        parent::__construct();
        $this->load->database();
    }

    function get_perpustakaan() //mengambil data dari tabel bryanperpustakaan dalam database
    {
        // $sql = "SELECT * FROM bryanperpustakaan";
        //$data = $this->db->query($sql);
        //return $data->result();
        return $this->db->get('bryanperpustakaan')->result();
        //SELECT * FROM bryanperpustakaan
    }

    function insert_perpustakaan($data) //untuk insert data perpustakaan ke dalam tabel bryanperpustakaan dalam database
    {
        /* $sql = "INSERT INTO bryanperpustakaan (idperpus, buku, peminjam, penulis, kategori) VALUES (?, ?, ?, ?, ?)";
        $this->db->query($sql, array(
            $data['idperpus'],
            $data['buku'],
            $data['peminjam'],
            $data['penulis'],
            $data['kategori']
        )); */
        $insert_data = array(
            'idperpus' => $data['idperpus'],
            'buku' => $data['buku'],
            'peminjam' => $data['peminjam'],
            'penulis' => $data['penulis'],
            'kategori' => $data['kategori']
        );

        $this->db->insert('bryanperpustakaan', $insert_data);
    }

    function get_one($idperpus) // mengambil satu data perpustakaan dari tabel bryanperpustakaan berdasarkan id yang diberikan
    {
        //$sql = "SELECT * FROM bryanperpustakaan WHERE idperpus = ?";
        //$data = $this->db->query($sql, array($idperpus));
        //return $data->result();

        //return $this->db->get_where('bryanperpustakaan', array('idperpus' => $idperpus)) -> result(); //cara pertama

        $this->db->where('idperpus', $idperpus);
        return $this->db->get('bryanperpustakaan')->result(); //cara kedua
    }

    function update($data) //memperbarui data perpustakaan dalam tabel bryanperpustakaan berdasarkan id
    {
        /*  $sql = "UPDATE bryanperpustakaan 
                SET buku = ?, peminjam = ?, penulis = ? , kategori = ? 
                WHERE idperpus = ?";
        $this->db->query($sql, array($data['buku'], $data['peminjam'], $data['penulis'], $data['kategori'], $data['idperpus'])); */

        $data_update = array(
            'buku' => $data['buku'],
            'peminjam' => $data['peminjam'],
            'penulis' => $data['penulis'],
            'kategori' => $data['kategori']
        );

        $this->db->where('idperpus', $data['idperpus']);
        $this->db->update('bryanperpustakaan', $data_update);
    }

    function delete($idperpus) //menghapus data perpustakaan dari tabel bryanperpustakaan berdasarkan id
    {
        /* $sql = "DELETE FROM bryanperpustakaan WHERE idperpus = ?";
        $this->db->query($sql, array($idperpus)); */

        $this->db->where('idperpus', $idperpus);
        $this->db->delete('bryanperpustakaan');
    }
}
