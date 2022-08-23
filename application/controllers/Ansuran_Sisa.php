<?php

class Ansuran_Sisa extends CI_Controller
{
    public function index()
    {
        $data['ansuran_sisa'] = $this->RusunModel->get_data('sisa_ansuran')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran_sisa/data_ansuran_sisa', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $data['ansuran_sisa'] = $this->RusunModel->get_data('sisa_ansuran')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran_sisa/tambah_data');
        $this->load->view('template/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $s_pembayaran    = $this->input->post('s_pembayaran');
            $sisa_jumlah    = $this->input->post('sisa_jumlah');

            $data = array(
                's_pembayaran'     => $s_pembayaran,
                'sisa_jumlah' => $sisa_jumlah,
            );

            $this->RusunModel->insert_data($data, 'sisa_ansuran');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('ansuran_sisa');
        }
    }

    public function update_data($id)
    {
        $where = array('id_sisa' => $id);
        $data['ansuran_sisa'] = $this->db->query("SELECT * FROM sisa_ansuran WHERE id_sisa= '$id'")->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('ansuran_sisa/update_data', $data);
        $this->load->view('template/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id                = $this->input->post('id_ansuran');
            $s_pembayaran    = $this->input->post('s_pembayaran');
            $sisa_jumlah    = $this->input->post('sisa_jumlah');

            $data = array(
                's_pembayaran'     => $s_pembayaran,
                'sisa_jumlah' => $sisa_jumlah,
            );

            $where = array(
                'id_sisa' => $id
            );

            $this->RusunModel->update_data('sisa_ansuran', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('ansuran_sisa');
        }
    }


    public function _rules()
    {
        $this->form_validation->set_rules('s_pembayaran', 'Pembayaran', 'required');
        $this->form_validation->set_rules('sisa_jumlah', 'Jumlah', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_sisa' => $id);
        $this->RusunModel->delete_data($where, 'sisa_ansuran');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
        redirect('ansuran_sisa');
    }
}