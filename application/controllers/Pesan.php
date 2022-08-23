<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    public function pesan()
    {
        $data['pesan'] = $this->RusunModel->get_data('pesan')->result();
        $data['pindahan'] = $this->RusunModel->get_data('data_kamar')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('pesan/index', $data);
        $this->load->view('template/footer');
    }

    public function pesan_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->pesan();
        } else {
            $nama    = $this->input->post('nama');
            $isi_pesan    = $this->input->post('isi_pesan');

            $data = array(
                'nama'     => $nama,
                'isi_pesan' => $isi_pesan,
            );
            $notif_pesan = [
                'judul' => 'Pesan masuk',
                'isi_pesan' => 'Pesan ' . $this->input->post('nama') . ' masuk pada ' . date('D, d-M-Y, H:i', $data['tanggal_dibuat']) . '.',
                'is_read' => 0

            ];

            $this->RusunModel->insert_data($data, 'pesan');
            $this->RusunModel->insert_data($notif_pesan, 'notif_pesan');
            $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Pesan sudah dikirim!</div>');

            redirect('pesan/pesan');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('isi_pesan', 'Isi Pesan', 'required');
    }
}