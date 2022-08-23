<?php

class Data_Pembayaran extends CI_Controller
{

	public function index()
	{
		$data['kamar'] = $this->db->query("SELECT data_bayar_kamar.*, ansuran.*, sisa_ansuran.*, data_kamar.*
		FROM data_bayar_kamar
		INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
		INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
		LEFT JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
		ORDER BY id_bayar_kamar")->result();

		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran/data_bayar', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data()
	{
		$data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();

		$data['pengguna'] = $this->RusunModel->get_data('data_pengguna')->result();
		$data['ansuran'] = $this->RusunModel->get_data('ansuran')->result();

		$data['ansuran_sisa'] = $this->RusunModel->get_data('sisa_ansuran')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran/tambah_data_bayar', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$id_kamar	= $this->input->post('id_kamar');
			$id_ansuran		= $this->input->post('id_ansuran');
			$id_sisa	= $this->input->post('id_sisa');
			$id_pengguna	= $this->input->post('id_pengguna');
			$status_bayar		= $this->input->post('status_bayar');
			$tanggal_bayar = $this->input->post('tanggal_bayar');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$photo = $this->input->post('photo');

			$data = array(
				'id_kamar' 	=> $id_kamar,
				'id_ansuran' 	=> $id_ansuran,
				'id_sisa' 	=> $id_sisa,
				'id_pengguna' 	=> $id_pengguna,
				'status_bayar' 	=> $status_bayar,
				'tanggal_bayar' => $tanggal_bayar,
				'nama' => $nama,
				'keterangan' => $keterangan,
				'photo' => $photo,
			);

			$this->RusunModel->insert_data($data, 'data_bayar_kamar');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('data_pembayaran');
		}
	}

	public function update_data($id)
	{
		$where = array('id_bayar_kamar' => $id);
		$data['kamar'] =  $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*
         FROM data_bayar_kamar  
         LEFT JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
         WHERE id_bayar_kamar='$id'")->result();

		$data['ansuran'] = $this->RusunModel->get_data('ansuran')->result();
		$data['ansuran_sisa'] = $this->RusunModel->get_data('sisa_ansuran')->result();
		$data['pengguna'] = $this->RusunModel->get_data('data_pengguna')->result();
		$data['kmr'] = $this->RusunModel->get_data('data_kamar')->result();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar');
		$this->load->view('pembayaran/update_data_bayar', $data);
		$this->load->view('template/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_bayar_kamar');
			$id_kamar	= $this->input->post('id_kamar');
			$id_ansuran		= $this->input->post('id_ansuran');
			$id_sisa	= $this->input->post('id_sisa');
			$id_pengguna	= $this->input->post('id_pengguna');
			$status_bayar		= $this->input->post('status_bayar');
			$tanggal_bayar = $this->input->post('tanggal_bayar');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$photo          = $_FILES['photo']['name'];
			if ($photo) {
				$config['upload_path']      = './photo';
				$config['allowed_types']    = 'jpg|jpeg|png|tiff';
				$config['max_size']         =   2048;
				$config['file_name']        =   'slip-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo')) {
					$photo = $this->upload->data('file_name');
					$this->db->set('photo', $photo);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'id_kamar' 	=> $id_kamar,
				'id_ansuran' 	=> $id_ansuran,
				'id_sisa' 	=> $id_sisa,
				'id_pengguna' 	=> $id_pengguna,
				'status_bayar' 	=> $status_bayar,
				'tanggal_bayar' => $tanggal_bayar,
				'nama' => $nama,
				'keterangan' => $keterangan,
			);
			$where = array(
				'id_bayar_kamar' => $id
			);

			$this->RusunModel->update_data('data_bayar_kamar', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('data_pembayaran');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_kamar', 'Kamar', 'required');
		$this->form_validation->set_rules('id_ansuran', 'Ansuran');
		$this->form_validation->set_rules('id_sisa', 'Sisa');
		$this->form_validation->set_rules('id_pengguna', 'pengguna');
		$this->form_validation->set_rules('status_bayar', 'Status');
		$this->form_validation->set_rules('tanggal_bayar', 'Tanggal Bayar');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('keterangan', 'ket');
		$this->form_validation->set_rules('photo', 'photo');
	}

	public function delete_data($id)
	{
		$where = array('id_bayar_kamar' => $id);
		$this->RusunModel->delete_data($where, 'data_bayar_kamar');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('data_pembayaran');
	}

	public function print()
	{
		$data['kamar'] = $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*, ansuran.*, sisa_ansuran.*, data_pengguna.*
		FROM data_bayar_kamar
		INNER JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
		INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
		INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
		INNER JOIN data_pengguna ON data_bayar_kamar.id_pengguna = data_pengguna.id_pengguna")->result();
		$this->load->view('pembayaran/print', $data);
	}
}