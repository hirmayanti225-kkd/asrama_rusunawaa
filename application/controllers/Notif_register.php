<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif_register extends CI_Controller
{

    public function index()
    {
        $data['notifikasi'] = $this->RusunModel->get_data('notif_register')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('notif_register', $data);
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['pengguna'] = $this->RusunModel->get_data('data_pengguna')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('register2/detail', $data);
        $this->load->view('template/footer');
    }


    public function tandaisudahdibaca($id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('notif_register', $data, ['id_register' => $id]);
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_register'));
    }

    public function tandaisudahdibacasemua()
    {
        $notif = $this->db->get_where('notif_register', ['is_read' => 0])->result_array();
        for ($i = 0; $i < count($notif); $i++) {
            $data = [
                'is_read' => 1
            ];
            $this->db->update('notif_register', $data, ['id_register' => $notif[$i]['id_register']]);
        }
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_register'));
    }

    public function hapus($id)
    {
        $this->db->delete('notif_register', ['id_register' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data dihapus</div>');

        return redirect(base_url('notif_register'));
    }
}