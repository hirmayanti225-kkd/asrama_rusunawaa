<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->RusunModel->cek_login($username, $password);

			if ($cek == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Username atau Password Salah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
			} else {
				$this->session->set_userdata('hak_akses', $cek->hak_akses);
				$this->session->set_userdata('nama', $cek->nama);
				$this->session->set_userdata('photo', $cek->photo);
				$this->session->set_userdata('id_pengguna', $cek->id_pengguna);
				$this->session->set_userdata('id_kamar', $cek->id_kamar);
				$this->session->set_userdata('nomor_pokok', $cek->nomor_pokok);
				switch ($cek->hak_akses) {
					case 1:
						redirect('dashboard');
						break;
					case 2:
						redirect('dashboard_pengurus');
						break;
					case 3:
						redirect('profil');
						break;
					default:
						break;
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home_page');
	}
}