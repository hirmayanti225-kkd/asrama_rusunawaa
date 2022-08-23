<?php

class Data_Pengguna extends CI_Controller
{
    public function index()
    {
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
        FROM data_pengguna
        LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('datapengguna/datapengguna', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
        FROM data_pengguna
        LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('datapengguna/tambah_data', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $nomor_pokok = $this->input->post('nomor_pokok');
            $nama  = $this->input->post('nama');
            $alamat            = $this->input->post('alamat');
            $pendidikan            = $this->input->post('pendidikan');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $status         = $this->input->post('status');
            $wa         = $this->input->post('wa');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $hak_akses      = $this->input->post('hak_akses');
            $id_kamar      = $this->input->post('id_kamar');
            $id_checkout     = $this->input->post('id_checkout');
            $id_jlh     = $this->input->post('id_jlh');
            $id_pengumuman     = $this->input->post('id_pengumuman');
            $id_pesan     = $this->input->post('id_pesan');

            $photo          = $_FILES['photo']['name'];
            if ($photo = '') {
            } else {
                $config['upload_path']      = './photo'; // nama folder
                $config['allowed_types']    = 'jpg|jpeg|png|tiff'; // format foto
                $config['max_size']         =   2048; // max size foto
                $config['file_name']        =   'member-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    echo "Photo Gagal Diupload !";
                } else {
                    $photo = $this->upload->data('file_name');
                }
            }

            $data = array(
                'nomor_pokok'           => $nomor_pokok,
                'nama'  => $nama,
                'alamat'           => $alamat,
                'pendidikan'           => $pendidikan,
                'username'      => $username,
                'password'      => $password,
                'jenis_kelamin' => $jenis_kelamin,
                'status'        => $status,
                'wa'        => $wa,
                'tanggal_masuk' => $tanggal_masuk,
                'hak_akses'     => $hak_akses,
                'photo'         => $photo,
                'id_checkout'         => $id_checkout,
                'id_kamar'         => $id_kamar,
                'id_jlh'         => $id_jlh,
                'id_pengumuman'         => $id_pengumuman,
                'id_pesan'         => $id_pesan,
            );


            $this->RusunModel->insert_data($data, 'data_pengguna');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('data_pengguna');
        }
    }

    //update data member registrasi
    public function update_data($id)
    {
        $where = array('id_pengguna' => $id);
        $data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
         FROM data_pengguna
         LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar
         WHERE id_pengguna='$id'")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('datapengguna/update_data', $data);
        $this->load->view('template/footer');
    }

    public function update_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data();
        } else {
            $id             = $this->input->post('id_pengguna');
            $nomor_pokok = $this->input->post('nomor_pokok');
            $nama  = $this->input->post('nama');
            $alamat            = $this->input->post('alamat');
            $pendidikan            = $this->input->post('pendidikan');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $status         = $this->input->post('status');
            $wa         = $this->input->post('wa');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $hak_akses      = $this->input->post('hak_akses');
            $id_kamar      = $this->input->post('id_kamar');
            $id_checkout     = $this->input->post('id_checkout');
            $id_jlh     = $this->input->post('id_jlh');
            $id_pengumuman     = $this->input->post('id_pengumuman');
            $id_pesan     = $this->input->post('id_pesan');

            $photo          = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']      = './photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config['max_size']         =   2048;
                $config['file_name']        =   'pengguna-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nomor_pokok'           => $nomor_pokok,
                'nama'  => $nama,
                'alamat'           => $alamat,
                'pendidikan'           => $pendidikan,
                'username'      => $username,
                'password'      => $password,
                'jenis_kelamin' => $jenis_kelamin,
                'status'        => $status,
                'wa'        => $wa,
                'tanggal_masuk' => $tanggal_masuk,
                'hak_akses'     => $hak_akses,
                'id_checkout'         => $id_checkout,
                'id_kamar'         => $id_kamar,
                'id_jlh'         => $id_jlh,
                'id_pengumuman'         => $id_pengumuman,
                'id_pesan'         => $id_pesan,
            );


            $where = array(
                'id_pengguna' => $id
            );

            $this->RusunModel->update_data('data_pengguna', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Data berhasil diupdate!</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>');
            redirect('data_pengguna');
        }
    }

    //update profil member
    public function update_data_member($id)
    {
        $where = array('id_pengguna' => $id);
        $data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
        FROM data_pengguna
        LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar
        WHERE id_pengguna='$id'")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('update_profil_member', $data);
        $this->load->view('template/footer');
    }

    public function update_data_member_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data_member();
        } else {
            $id             = $this->input->post('id_pengguna');
            $nama  = $this->input->post('nama');
            $alamat            = $this->input->post('alamat');
            $pendidikan            = $this->input->post('pendidikan');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $status         = $this->input->post('status');
            $wa         = $this->input->post('wa');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $hak_akses      = $this->input->post('hak_akses');
            $id_kamar      = $this->input->post('id_kamar');
            $id_checkout     = $this->input->post('id_checkout');
            $id_jlh     = $this->input->post('id_jlh');
            $id_pengumuman     = $this->input->post('id_pengumuman');
            $id_pesan     = $this->input->post('id_pesan');

            $photo          = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']      = './photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config['max_size']         =   2048;
                $config['file_name']        =   'member-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nama'  => $nama,
                'alamat'           => $alamat,
                'pendidikan'           => $pendidikan,
                'username'      => $username,
                'password'      => $password,
                'jenis_kelamin' => $jenis_kelamin,
                'status'        => $status,
                'wa'        => $wa,
                'tanggal_masuk' => $tanggal_masuk,
                'hak_akses'     => $hak_akses,
                'id_checkout'         => $id_checkout,
                'id_kamar'         => $id_kamar,
                'id_jlh'         => $id_jlh,
                'id_pengumuman'         => $id_pengumuman,
                'id_pesan'         => $id_pesan,
            );

            $where = array(
                'id_pengguna' => $id
            );

            $this->RusunModel->update_data('data_pengguna', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Data berhasil diupdate!</strong>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button>
                   </div>');
            redirect('profil');
        }
    }

    //update data pengurus
    public function update_data_op($id)
    {
        $where = array('id_pengguna' => $id);
        $data['kamar'] = $this->RusunModel->get_data('data_kamar')->result();
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
       FROM data_pengguna
       LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar
       WHERE id_pengguna='$id'")->result();

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar');
        $this->load->view('update_profil_op', $data);
        $this->load->view('template/footer');
    }

    public function update_data_op_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update_data_op();
        } else {
            $id             = $this->input->post('id_pengguna');
            $id             = $this->input->post('id_pengguna');
            $nama  = $this->input->post('nama');
            $alamat            = $this->input->post('alamat');
            $pendidikan            = $this->input->post('pendidikan');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $status         = $this->input->post('status');
            $wa         = $this->input->post('wa');
            $tanggal_masuk = $this->input->post('tanggal_masuk');
            $hak_akses      = $this->input->post('hak_akses');
            $id_kamar      = $this->input->post('id_kamar');
            $id_checkout     = $this->input->post('id_checkout');
            $id_jlh     = $this->input->post('id_jlh');
            $id_pengumuman     = $this->input->post('id_pengumuman');
            $id_pesan     = $this->input->post('id_pesan');

            $photo          = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path']      = './photo';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff';
                $config['max_size']         =   2048;
                $config['file_name']        =   'operator-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nama'  => $nama,
                'alamat'           => $alamat,
                'pendidikan'           => $pendidikan,
                'username'      => $username,
                'password'      => $password,
                'jenis_kelamin' => $jenis_kelamin,
                'status'        => $status,
                'wa'        => $wa,
                'tanggal_masuk' => $tanggal_masuk,
                'hak_akses'     => $hak_akses,
                'id_checkout'         => $id_checkout,
                'id_kamar'         => $id_kamar,
                'id_jlh'         => $id_jlh,
                'id_pengumuman'         => $id_pengumuman,
                'id_pesan'         => $id_pesan,
            );

            $where = array(
                'id_pengguna' => $id
            );

            $this->RusunModel->update_data('data_pengguna', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diupdate!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('dashboard_pengurus');
        }
    }

    public function _rules()  //form validation
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('status', 'Status');
        $this->form_validation->set_rules('nomor_pokok', 'Nomor Pokok');
        $this->form_validation->set_rules('wa', 'No. WA', 'required');
        $this->form_validation->set_rules('hak_akses', 'Hak Akses');
        $this->form_validation->set_rules('username', 'Username');
        $this->form_validation->set_rules('password', 'Password');
        // $this->form_validation->set_rules('judul', 'Judul');
        // $this->form_validation->set_rules('pesan', 'Pesan');
        //$this->form_validation->set_rules('is_read', 'is_read');
        $this->form_validation->set_rules('id_kamar', 'Id Kamar');
        $this->form_validation->set_rules('id_checkout', 'Id Checkout');
        $this->form_validation->set_rules('id_jlh', 'Id Jlh');
        $this->form_validation->set_rules('id_pengumuman', 'Id Pengumuman');
        $this->form_validation->set_rules('id_pesan', 'Id Pesan');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
    }

    public function delete_data($id)
    {
        $where = array('id_pengguna' => $id);
        $this->RusunModel->delete_data($where, 'data_pengguna');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
        redirect('data_pengguna');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['pengguna'] = $this->RusunModel->get_keyword_pengguna($keyword);

        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar');
        $this->load->view('datapengguna/datapengguna', $data);
        $this->load->view('template/footer');
    }
    public function print()
    {
        $data['pengguna'] = $this->db->query("SELECT data_pengguna.*, data_kamar.*
        FROM data_pengguna
        LEFT JOIN data_kamar ON data_pengguna.id_kamar = data_kamar.id_kamar")->result();
        $this->load->view('template/header');
        $this->load->view('datapengguna/print', $data);
    }
}