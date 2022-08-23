<?php

class Ganti_Password_Admin extends CI_Controller
{

	public function index()
	{
		$data['title'] = "Form Ganti Password";

		$this->load->view('template/header_admin', $data);
		$this->load->view('template/sidebar');
		$this->load->view('ganti_password', $data);
		$this->load->view('template/footer');
	}

	public function ganti_password_aksi()
	{
		$passBaru = $this->input->post('passBaru');
		$ulangPass = $this->input->post('ulangPass');

		$this->form_validation->set_rules('passBaru', 'password baru', 'required|matches[ulangPass]');
		$this->form_validation->set_rules('ulangPass', 'ulangi password baru', 'required');

		if ($this->form_validation->run() != FALSE) {
			$data = array('password' => md5($passBaru));
			$data = array('password' => md5($ulangPass));
			$id = array('id_pengguna' => $this->session->userdata('id_pengguna')); //utk id perorg
			$this->ModelPenggajian->update_data('data_pengguna', $data, $id); //ngambil password dr data pegawai
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Password berhasil diganti!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
		} else {
			$data['title'] = "Form Ganti Password";

			$this->load->view('template/header_admin', $data);
			$this->load->view('template/sidebar');
			$this->load->view('ganti_password', $data);
			$this->load->view('template/footer');
		}
	}
}