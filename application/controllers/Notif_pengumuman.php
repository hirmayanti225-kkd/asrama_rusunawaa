<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif_pengumuman extends CI_Controller
{

    public function index()
    {
        $data['notifikasi_p'] = $this->RusunModel->get_data('notif_pengumuman')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('notif_pengumuman', $data);
        $this->load->view('template/footer');
    }


    public function tandaisudahdibaca($id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('notif_pengumuman', $data, ['id' => $id]);
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_pengumuman'));
    }

    public function tandaisudahdibacasemua()
    {
        $notif_pengumuman = $this->db->get_where('notif_pengumuman', ['is_read' => 0])->result_array();
        for ($i = 0; $i < count($notif_pengumuman); $i++) {
            $data = [
                'is_read' => 1
            ];
            $this->db->update('notif_pengumuman', $data, ['id' => $notif_pengumuman[$i]['id']]);
        }
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_pengumuman'));
    }

    public function hapus($id)
    {
        $this->db->delete('notif_pengumuman', ['id' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data dihapus</div>');

        return redirect(base_url('notif_pengumuman'));
    }
}