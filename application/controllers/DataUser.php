<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUser extends CI_Controller
{

    public function index()
    {
        $data = $this->db->query("SELECT*FROM data_pengguna")->result();
        var_dump($data);
    }
}