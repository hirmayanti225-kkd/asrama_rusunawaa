<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_kosong extends CI_Controller
{

    public function data_kamar()
    {
        $data['isi'] = $this->RusunModel->get_data('jlh_kamar')->result();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('kamar_kosong/data_kamar', $data);
        $this->load->view('template/footer');
    }

    public function _rules()  //form validation
    {
        $this->form_validation->set_rules('kamar', 'Kamar', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jlh', 'Jumlah Isi');
    }

    public function delete_data($id)
    {
        $where = array('id_member' => $id);
        $this->RusunModel->delete_data($where, 'data_member');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('kamar/a01');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['kamar'] = $this->RusunModel->get_keyword($keyword);

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('kamar/data_kamar', $data);
        $this->load->view('template/footer');
    }

    public function print()
    {
        $data['kamar'] = $this->RusunModel->get_data("data_bayar_kamar")->result();
        $this->load->view('kamar/print', $data);
    }
}