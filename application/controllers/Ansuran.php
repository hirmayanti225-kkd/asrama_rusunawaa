<?php

class Ansuran extends CI_Controller
{
    public function index()
    {
        $data['ansuran'] = $this->RusunModel->get_data('ansuran')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran/data_ansuran', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $data['ansuran'] = $this->RusunModel->get_data('ansuran')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran/tambah_data');
        $this->load->view('template/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $pembayaran    = $this->input->post('pembayaran');
            $jumlah    = $this->input->post('jumlah');

            $data = array(
                'pembayaran'     => $pembayaran,
                'jumlah' => $jumlah,
            );

            $this->RusunModel->insert_data($data, 'ansuran');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('ansuran');
        }
    }

    public function update_data($id)
    {
        $where = array('id_ansuran' => $id);
        $data['ansuran'] = $this->db->query("SELECT * FROM ansuran WHERE id_ansuran= '$id'")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran/update_data', $data);
        $this->load->view('template/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id                = $this->input->post('id_ansuran');
            $pembayaran    = $this->input->post('pembayaran');
            $jumlah    = $this->input->post('jumlah');


            $data = array(
                'pembayaran'     => $pembayaran,
                'jumlah' => $jumlah,
            );

            $where = array(
                'id_ansuran' => $id
            );

            $this->RusunModel->update_data('ansuran', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('ansuran');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_ansuran' => $id);
        $this->RusunModel->delete_data($where, 'ansuran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('ansuran');
    }
}