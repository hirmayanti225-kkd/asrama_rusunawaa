<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notif_pesan extends CI_Controller
{

    public function index()
    {
        $data['notifikasi_k'] = $this->RusunModel->get_data('notif_pesan')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('notif_pesan', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $where = array('id_pesan' => $id);
        $data['pesan'] = $this->db->query("SELECT * FROM pesan WHERE id_pesan='$id'")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('pesan/detail', $data);
        $this->load->view('template/footer');
    }

    public function tandaisudahdibaca($id)
    {
        $data = [
            'is_read' => 1
        ];

        $this->db->update('notif_pesan', $data, ['id_notif_pesan' => $id]);
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_pesan'));
    }

    public function tandaisudahdibacasemua()
    {
        $notif_pesan = $this->db->get_where('notif_pesan', ['is_read' => 0])->result_array();
        for ($i = 0; $i < count($notif_pesan); $i++) {
            $data = [
                'is_read' => 1
            ];
            $this->db->update('notif_pesan', $data, ['id_notif_pesan' => $notif_pesan[$i]['id_notif_pesan']]);
        }
        $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
        return redirect(base_url('notif_pesan'));
    }

    public function hapus($id)
    {
        $this->db->delete('notif_pesan', ['id_notif_pesan' => $id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data dihapus</div>');

        return redirect(base_url('notif_pesan'));
    }
}