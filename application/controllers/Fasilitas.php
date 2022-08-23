<?php

class Fasilitas extends CI_Controller
{

	public function index()
	{

		$data['fasilitas'] = $this->RusunModel->get_data('fasilitas')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('fasilitas/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{
		$data['fasilitas'] = $this->RusunModel->get_data('fasilitas')->result();


		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('fasilitas/tambah_data', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$id_kamar	= $this->input->post('id_kamar');
			$fasilitas	= $this->input->post('fasilitas');
			$jumlah	= $this->input->post('jumlah');

			$data = array(
				'id_kamar' 	=> $id_kamar,
				'fasilitas' 	=> $fasilitas,
				'jumlah' 	=> $jumlah,
			);

			$this->RusunModel->insert_data($data, 'fasilitas');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('fasilitas');
		}
	}

	public function update_data_fa($id)
	{
		$where = array('id_fasilitas' => $id);
		$data['fasilitas'] = $this->db->query("SELECT * FROM fasilitas WHERE id_fasilitas= '$id'")->result();

		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('fasilitas/update_data', $data);
		$this->load->view('template/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data_fa();
		} else {
			$id				= $this->input->post('id_fasilitas');
			$fasilitas	= $this->input->post('fasilitas');
			$jumlah	= $this->input->post('jumlah');

			$data = array(
				'fasilitas' 	=> $fasilitas,
				'jumlah' 	=> $jumlah,
			);

			$where = array(
				'id_fasilitas' => $id
			);

			$this->RusunModel->update_data('fasilitas', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('fasilitas');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_fasilitas' => $id);
		$this->RusunModel->delete_data($where, 'fasilitas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('fasilitas');
	}
}