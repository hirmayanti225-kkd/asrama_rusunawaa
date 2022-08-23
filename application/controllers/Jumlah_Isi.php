<?php

class Jumlah_Isi extends CI_Controller
{

	public function index()
	{
		$data['isi'] = $this->RusunModel->get_data('jlh_kamar')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('jumlah_isi/jumlah_isi', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{
		$data['isi'] = $this->RusunModel->get_data('jlh_kamar')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('jumlah_isi/tambah_data_isi');
		$this->load->view('template/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$no_kamar	= $this->input->post('no_kamar');
			$jumlah	= $this->input->post('jumlah');

			$data = array(
				'no_kamar' 	=> $no_kamar,
				'jumlah' 	=> $jumlah,
			);

			$this->RusunModel->insert_data($data, 'jlh_kamar');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('jumlah_isi');
		}
	}

	public function update_data($id)
	{
		$where = array('id_jlh' => $id);
		$data['isi'] = $this->db->query("SELECT * FROM jlh_kamar WHERE id_jlh= '$id'")->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('jumlah_isi/update_data_isi', $data);
		$this->load->view('template/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_jlh');
			$no_kamar	= $this->input->post('no_kamar');
			$jumlah	= $this->input->post('jumlah');


			$data = array(
				'no_kamar' 	=> $no_kamar,
				'jumlah' 	=> $jumlah,
			);

			$where = array(
				'id_jlh' => $id
			);

			$this->RusunModel->update_data('jlh_kamar', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('jumlah_isi');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('no_kamar', 'Nama Kamar', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah Isi Kamar', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_jlh' => $id);
		$this->RusunModel->delete_data($where, 'jlh_kamar');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('jumlah_isi');
	}
}