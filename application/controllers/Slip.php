<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slip extends CI_Controller
{

    public function slip()
    {
        $data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('slip/index', $data);
        $this->load->view('template/footer');
    }

    public function tampil($id)
    {
        $where = array('id_bayar_kamar' => $id);
        $data['slip'] =  $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*
         FROM data_bayar_kamar  
         LEFT JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
         WHERE id_bayar_kamar='$id'")->result();


        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('slip/tampil', $data);
        $this->load->view('template/footer');
    }

    public function slip_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->slip();
        } else {
            $nama    = $this->input->post('nama');
            $keterangan   = $this->input->post('keterangan');
            $id_kamar   = $this->input->post('id_kamar');

            $tanggal_dibuat    = $this->input->post('tanggal_dibuat');
            $is_read    = $this->input->post('is_read');
            $photo          = $_FILES['photo']['name'];
            if ($photo = '') {
            } else {
                $config['upload_path']      = './photo'; // nama folder
                $config['allowed_types']    = 'jpg|jpeg|png|tiff'; // format foto
                $config['max_size']         =   2048; // max size foto
                $config['file_name']        =   'slip-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal Diupload !";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            };
            $data = array(
                'nama'     => $nama,
                'keterangan' => $keterangan,
                'photo' => $photo,
                'id_kamar' => $id_kamar,

                'tanggal_dibuat' => $tanggal_dibuat,
                'is_read' => $is_read,
            );
            $notif_slip = [
                'nama_penyetor' => 'Setoran masuk',
                'keterangan' => 'Setoran ' . $this->input->post('nama_penyetor') . ' masuk pada ' . date('D, d-M-Y, H:i', $data['tanggal_dibuat']) . '.',
                'is_read' => 0

            ];

            $this->RusunModel->insert_data($data, 'slip');
            $this->RusunModel->insert_data($data, 'data_bayar_kamar');
            $this->RusunModel->insert_data($notif_slip, 'notif_slip');
            $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Slip pembayaran sudah dikirim!</div>');

            redirect('slip/slip');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('photo', 'Photo');
        $this->form_validation->set_rules('id_kamar', 'kamar', 'required');

        $this->form_validation->set_rules('tanggal_dibuat', 'Tanggal Dibuat');
        $this->form_validation->set_rules('is_read', 'Is read');
    }
}