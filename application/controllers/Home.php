<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('RusunModel');
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.kamar, bagian_kamar.keterangan
        FROM data_pengguna
        INNER JOIN data_kamar ON data_pengguna.id_pengguna = data_kamar.id_kamar INNER JOIN
        bagian_kamar ON data_kamar.id_kamar=bagian_kamar.id_bagian_kamar")->result();

        $this->load->view('home', $data);
    }
}