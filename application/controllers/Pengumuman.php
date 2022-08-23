<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{


    public function pengumuman()
    {
        $data['pengumuman'] = $this->RusunModel->get_data('pengumuman')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('pengumuman/pengumuman', $data);
        $this->load->view('template/footer');
    }


    public function pengumuman_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->pengumuman();
        } else {
            $nama    = $this->input->post('nama');
            $isi_pengumuman    = $this->input->post('isi_pengumuman');

            $data = array(
                'nama'     => $nama,
                'isi_pengumuman' => $isi_pengumuman,
            );
            $notif_pengumuman = [
                'keterangan' => 'Pengumuman masuk',
                'isi_pengumuman' => 'Pengumuman ' . $this->input->post('nama') . ' masuk pada ' . date('D, d-M-Y, H:i', $data['tanggal_dibuat']) . '.',
                'is_read' => 0

            ];

            $this->RusunModel->insert_data($data, 'pengumuman');
            $this->RusunModel->insert_data($notif_pengumuman, 'notif_pengumuman');
            $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Pengumuman sudah dikirim!</div>');

            redirect('pengumuman/pengumuman');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
    }

    public function tampil($id)
    {
        $where = array('id_pengumuman' => $id);
        $data['pengumuman'] = $this->db->query("SELECT * FROM pengumuman WHERE id_pengumuman='$id'")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('pengumuman/tampil', $data);
        $this->load->view('template/footer');
    }
}