<?php

class Data_Keluar extends CI_Controller
{

    public function index()
    {
        $data['out'] = $this->db->query("SELECT data_checkout.*, data_kamar.*, data_pengguna.*
         FROM data_checkout
         LEFT JOIN data_kamar ON data_checkout.id_kamar = data_kamar.id_kamar
         INNER JOIN data_pengguna ON data_checkout.id_pengguna = data_pengguna.id_pengguna
         ORDER BY data_checkout.id_checkout")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('data_keluar/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $data['out'] = $this->db->query("SELECT data_checkout.*, data_kamar.*
        FROM data_checkout
        LEFT JOIN data_kamar ON data_checkout.id_kamar = data_kamar.id_kamar")->result();
        $data['nama'] = $this->RusunModel->get_data('data_pengguna')->result();
        $data['kmr'] = $this->RusunModel->get_data('data_kamar')->result();


        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('data_keluar/tambah_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_pengguna    = $this->input->post('id_pengguna');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_keluar        = $this->input->post('tanggal_keluar');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'id_kamar'     => $id_kamar,
                'tanggal_keluar'     => $tanggal_keluar,

            );

            $this->RusunModel->insert_data($data, 'data_checkout');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('data_keluar');
        }
    }
    //data tambah keluar dari member
    public function tambah_data_m_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_pengguna    = $this->input->post('id_pengguna');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_keluar        = $this->input->post('tanggal_keluar');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'id_kamar'     => $id_kamar,
                'tanggal_keluar'     => $tanggal_keluar,

            );

            $this->RusunModel->insert_data($data, 'data_checkout');
            $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Data Sudah Dikirim!</div>');

            redirect('pesan/pesan');
        }
    }

    public function update_data($id)
    {
        $where = array('id_checkout' => $id);
        $data['out'] = $this->db->query("SELECT data_checkout.*, data_kamar.*, data_pengguna.*
        FROM data_checkout
        INNER JOIN data_kamar ON data_checkout.id_kamar = data_kamar.id_kamar
        INNER JOIN data_pengguna ON data_checkout.id_pengguna = data_pengguna.id_pengguna
         WHERE id_checkout= '$id'")->result();

        $data['nama'] = $this->RusunModel->get_data('data_pengguna')->result();
        $data['kmr'] = $this->RusunModel->get_data('data_kamar')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('data_keluar/update_data', $data);
        $this->load->view('template/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id                = $this->input->post('id_checkout');
            $id_pengguna    = $this->input->post('id_pengguna');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_keluar        = $this->input->post('tanggal_keluar');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'id_kamar'     => $id_kamar,
                'tanggal_keluar'     => $tanggal_keluar,
            );
            $where = array(
                'id_checkout' => $id
            );

            $this->RusunModel->update_data('data_checkout', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('data_keluar');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pengguna', 'Nama');
        $this->form_validation->set_rules('id_kamar', 'Kamar');
        $this->form_validation->set_rules('tanggal_keluar', 'Tanggal Keluar', 'required');
    }


    public function delete_data($id)
    {
        $where = array('id_checkout' => $id);
        $this->RusunModel->delete_data($where, 'data_checkout');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('data_keluar');
    }



    public function print()
    {

        $data['kamar'] = $this->db->query("SELECT data_checkout.*, data_kamar.*, data_pengguna.*
          FROM data_checkout
          INNER JOIN data_kamar ON data_checkout.id_kamar = data_kamar.id_kamar
          INNER JOIN data_pengguna ON data_checkout.id_pengguna = data_pengguna.id_pengguna
          ORDER BY data_checkout.id_checkout")->result();

        $this->load->view('data_keluar/print', $data);
    }
}