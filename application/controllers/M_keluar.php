<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_keluar extends CI_Controller
{

    public function index()
    {
        $data['pesan'] = $this->RusunModel->get_data('pesan')->result();
        $data['pindahan'] = $this->RusunModel->get_data('data_kamar')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('data_keluar/member', $data);
        $this->load->view('template/footer');
    }
}