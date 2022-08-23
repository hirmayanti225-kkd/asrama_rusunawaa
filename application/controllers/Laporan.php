<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['tahun'] = $this->RusunModel->gettahun();

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('laporan/l_member', $data);
        $this->load->view('template/footer');
    }

    public function filter()
    {

        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {
            $data['subtitle'] = "Dari tanggal : " . $tanggalawal . ' sampai tanggal : ' . $tanggalakhir;
            $data['datafilter'] = $this->RusunModel->filterbytanggal($tanggalawal, $tanggalakhir);

            $this->load->view('template/header_admin');
            $this->load->view('laporan/cetak_laporan', $data);
        } else if ($nilaifilter == 2) {
            $data['subtitle'] = "Dari bulan : " . $bulanawal . ' sampai bulan : ' . $bulanakhir . ' tahun : ' . $tahun1;
            $data['datafilter'] = $this->RusunModel->filterbybulan($tahun1, $bulanawal, $bulanakhir);

            $this->load->view('template/header_admin');
            $this->load->view('laporan/cetak_laporan', $data);
        } else  if ($nilaifilter == 3) {
            $data['subtitle'] = ' Tahun : ' . $tahun2;
            $data['datafilter'] = $this->RusunModel->filterbytahun($tahun2);

            $this->load->view('template/header_admin');
            $this->load->view('laporan/cetak_laporan', $data);
        }
    }
}