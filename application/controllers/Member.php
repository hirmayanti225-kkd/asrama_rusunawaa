<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Anda Belum Login!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('login');
        }
    }
    public function data_transaksi()
    {
        $data['title'] = "Data Transaksi";
        $kamar = $this->session->userdata('id_kamar'); //ja=jabatan, data yang sama nilainya di data pegawai dan data jabatan

        $data['gaji1'] = $this->db->query("SELECT data_bayar_kamar.*, ansuran.*, sisa_ansuran.*
        FROM data_bayar_kamar
        INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
        INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
        WHERE data_bayar_kamar.id_kamar='$kamar' 
        ORDER BY data_bayar_kamar.tanggal_bayar")->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('member/data_transaksi', $data);
        $this->load->view('template/footer');
    }

    public function cetak_slip($id)
    { //id sbg parameter

        $data['print'] = $this->db->query("SELECT data_bayar_kamar.*, data_pengguna.*, ansuran.*, sisa_ansuran.*
        FROM data_bayar_kamar
        INNER JOIN data_pengguna ON data_bayar_kamar.id_kamar=data_pengguna.id_kamar
        INNER JOIN ansuran ON data_bayar_kamar.id_ansuran=ansuran.id_ansuran
        INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa=sisa_ansuran.id_sisa

		WHERE data_bayar_kamar.id_bayar_kamar='$id'")->result();

        $this->load->view('template/header');
        $this->load->view('member/cetak_slip', $data);
    }
}