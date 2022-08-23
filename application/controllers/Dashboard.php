<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '1') {
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
        $user = $this->db->query("SELECT * FROM data_pengguna");
        $data['user'] = $user->num_rows();
        $kamar = $this->db->query("SELECT * FROM jlh_kamar");
        $data['kamar'] = $kamar->num_rows();
        $bayar = $this->db->query("SELECT * FROM data_bayar_kamar");
        $data['bayar'] = $bayar->num_rows();

        $notif = $this->db->get_where('notif_register', ['is_read' => 0])->result_array();
        $data['notif'] = count($notif);
        $notif_pesan = $this->db->get_where('notif_pesan', ['is_read' => 0])->result_array();
        $data['notif_k'] = count($notif_pesan);
        $notif_slip = $this->db->get_where('notif_slip', ['is_read' => 0])->result_array();
        $data['notif_s'] = count($notif_slip);

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}