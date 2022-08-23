<?php

class Fungsi
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function hak_akses()
    {
        $this->ci->load->model('RusunModel');
        $id_pengguna = $this->ci->session->userdata('id_pengguna');
        $data_pengguna = $this->ci->RusunModel->get($id_pengguna)->row();
        return $data_pengguna;
    }
}