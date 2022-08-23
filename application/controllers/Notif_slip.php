<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif_slip extends CI_Controller
{

    public function index()
    {
        $data['notifikasi_setor'] = $this->RusunModel->get_data('notif_slip')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('notif_slip', $data);
        $this->load->view('template/footer');
    }


    public function tandaisudahdibaca($id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('notif_slip', $data, ['id' => $id]);
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_slip'));
    }

    public function tandaisudahdibacasemua()
    {
        $notif_setor = $this->db->get_where('notif_slip', ['is_read' => 0])->result_array();
        for ($i = 0; $i < count($notif_setor); $i++) {
            $data = [
                'is_read' => 1
            ];
            $this->db->update('notif_slip', $data, ['id' => $notif_setor[$i]['id']]);
        }
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_slip'));
    }

    public function hapus($id)
    {
        $this->db->delete('notif_slip', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data dihapus</div>');

        return redirect(base_url('notif_slip'));
    }
}