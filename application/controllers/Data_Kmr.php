<?php

class Data_Kmr extends CI_Controller
{

	public function index()
	{
		$data['kmr'] = $this->RusunModel->get_data('data_kamar')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('kmr/data_kmr', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{
		$data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();

		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('kmr/tambah_data_kmr', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$kamar	= $this->input->post('kamar');
			$is_read	= $this->input->post('is_read');

			$data = array(
				'kamar' 	=> $kamar,
				'is_read' 	=> $is_read,
			);

			$this->RusunModel->insert_data($data, 'data_kamar');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('data_kmr');
		}
	}

	public function update_data($id)
	{
		$where = array('id_kamar' => $id);
		$data['kmr'] = $this->db->query("SELECT * FROM data_kamar WHERE id_kamar= '$id'")->result();

		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('kmr/update_data_kmr', $data);
		$this->load->view('template/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_kamar');
			$kamar	= $this->input->post('kamar');
			$is_read	= $this->input->post('is_read');

			$data = array(
				'kamar' 	=> $kamar,
				'is_read' 	=> $is_read,
			);

			$where = array(
				'id_kamar' => $id
			);

			$this->RusunModel->update_data('data_kamar', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('data_kmr');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kamar', 'Nama Kamar', 'required');
		$this->form_validation->set_rules('is_read', 'Is read');
	}

	public function delete_data($id)
	{
		$where = array('id_kamar' => $id);
		$this->RusunModel->delete_data($where, 'data_kamar');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('data_kmr');
	}

	public function tandaisudahdibaca($id)
	{
		$data = [
			'is_read' => 1
		];

		$this->db->update('data_kamar', $data, ['id_kamar' => $id]);
		$this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
		return redirect(base_url('data_kmr'));
	}

	public function tandaisudahdibacasemua()
	{
		$baca = $this->db->get_where('data_kamar', ['is_read' => 0])->result_array();
		for ($i = 0; $i < count($baca); $i++) {
			$data = [
				'is_read' => 1
			];
			$this->db->update('data_kamar', $data, ['id_kamar' => $baca[$i]['id_kamar']]);
		}
		$this->session->set_flashdata('pesan_notif', '<div class="alert alert-success">Notifikasi sudah dibaca</div>');
		return redirect(base_url('data_kmr'));
	}
}