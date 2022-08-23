<?php

class Data_pindahan extends CI_Controller
{

    public function index()
    {
        $data['pindah'] = $this->db->query("SELECT data_pindahan.*, data_kamar.*, data_pengguna.*
        FROM data_pindahan
        INNER JOIN data_kamar ON data_pindahan.id_kamar = data_kamar.id_kamar
        INNER JOIN data_pengguna ON data_pindahan.id_pengguna = data_pengguna.id_pengguna
        ORDER BY data_pindahan.id_pindahan")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('data_pindahan/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $data['nama'] = $this->RusunModel->get_data('data_pengguna')->result();
        $data['pindah'] = $this->db->query("SELECT data_pindahan.*, data_kamar.*
        FROM data_pindahan
        RIGHT JOIN data_kamar ON data_pindahan.id_kamar = data_kamar.id_kamar")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('data_pindahan/tambah_data', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_pengguna    = $this->input->post('id_pengguna');
            $asal_kamar    = $this->input->post('asal_kamar');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_pindah       = $this->input->post('tanggal_pindah');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'asal_kamar'     => $asal_kamar,
                'id_kamar'     => $id_kamar,
                'tanggal_pindah'     => $tanggal_pindah,

            );

            $this->RusunModel->insert_data($data, 'data_pindahan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('data_pindahan');
        }
    }
    //tambah data pindah dari member
    public function tambah_data_m_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $id_pengguna    = $this->input->post('id_pengguna');
            $asal_kamar    = $this->input->post('asal_kamar');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_pindah       = $this->input->post('tanggal_pindah');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'asal_kamar'     => $asal_kamar,
                'id_kamar'     => $id_kamar,
                'tanggal_pindah'     => $tanggal_pindah,

            );

            $this->RusunModel->insert_data($data, 'data_pindahan');
            $this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Data Sudah Dikirim!</div>');
            redirect('pesan/pesan');
        }
    }

    public function update_data($id)
    {
        $where = array('id_pindahan' => $id);
        $data['nama'] = $this->RusunModel->get_data('data_pengguna')->result();
        $data['kmr'] = $this->RusunModel->get_data('data_kamar')->result();
        $data['pindah'] = $this->db->query("SELECT * data_pindahan
        WHERE id_pindahan= '$id'")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('data_pindahan/update_data', $data);
        $this->load->view('template/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id                = $this->input->post('id_pindahan');
            $id_pengguna    = $this->input->post('id_pengguna');
            $asal_kamar    = $this->input->post('asal_kamar');
            $id_kamar    = $this->input->post('id_kamar');
            $tanggal_pindah       = $this->input->post('tanggal_pindah');

            $data = array(
                'id_pengguna'     => $id_pengguna,
                'asal_kamar'     => $asal_kamar,
                'id_kamar'     => $id_kamar,
                'tanggal_pindah'     => $tanggal_pindah,
            );
            $where = array(
                'id_pindahan' => $id
            );

            $this->RusunModel->update_data('data_pindahan', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('data_pindahan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_p engguna', 'Nama');
        $this->form_validation->set_rules('asal_kamar', 'Asal Kamar', 'required');
        $this->form_validation->set_rules('id_kamar', 'Kamar');
        $this->form_validation->set_rules('tanggal_pindah', 'Tanggal Pindah', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_pindahan' => $id);
        $this->RusunModel->delete_data($where, 'data_pindahan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('data_pindahan');
    }

    public function print()
    {
        $data['kamar'] = $this->RusunModel->get_data("data_bayar_kamar")->result();
        $this->load->view('pembayaran/print', $data);
    }
    public function print2()
    {

        $data['kamar'] = $this->db->query("SELECT data_pindahan.*, data_kamar.*, data_pengguna.*
          FROM data_pindahan
          INNER JOIN data_kamar ON data_pindahan.id_kamar = data_kamar.id_kamar
          INNER JOIN data_pengguna ON data_pindahan.id_pengguna = data_pengguna.id_pengguna
          ORDER BY data_pindahan.id_pindahan")->result();

        $this->load->view('data_pindahan/print', $data);
    }
}