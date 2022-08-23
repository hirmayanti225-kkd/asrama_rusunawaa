<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Pengurus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Belum Login!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id_pengguna');
        $data['member'] = $this->db->query("SELECT * FROM data_pengguna WHERE id_pengguna='$id'")->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('dashboard_pengurus', $data);
        $this->load->view('template/footer');
    }
}