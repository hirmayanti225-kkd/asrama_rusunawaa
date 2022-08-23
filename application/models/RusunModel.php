<?php

class RusunModel extends CI_model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function update_data($table, $data, $whare)
    {
        $this->db->update($table, $data, $whare);
    }
    public function delete_data($whare, $table)
    {
        $this->db->where($whare);
        $this->db->delete($table);
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('data_pengguna');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
    public function get($id = null)
    {
        $this->db->from('data_pengguna');
        if ($id != null) {
            $this->db->where('id_pengguna', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get_keyword_pengguna($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_pengguna');
        $this->db->or_like('nama', $keyword);
        $this->db->like('alamat', $keyword);
        $this->db->or_like('pendidikan', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('password', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('wa', $keyword);
        $this->db->or_like('id_kamar', $keyword);
        $this->db->or_like('tanggal_masuk', $keyword);
        $this->db->or_like('status', $keyword);
        $this->db->or_like('photo', $keyword);
        $this->db->or_like('hak_akses', $keyword);
        return $this->db->get()->result();
    }




    //JOIN
    public function kamar_user()
    {
        $this->db->select('*');
        $this->db->from('data_kamar');
        $this->db->join('data_pengguna', 'data_pengguna.kamar = data_kamar.id_kamar');
        return $this->db->get('');
    }


    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal_bayar) AS tahun FROM data_bayar_kamar 
        GROUP BY YEAR(tanggal_bayar) ORDER BY YEAR(tanggal_bayar) ASC");

        return $query->result();
    }

    function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*, ansuran.*, sisa_ansuran.*, data_pengguna.*
		FROM data_bayar_kamar
		INNER JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
		INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
		INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
		INNER JOIN data_pengguna ON data_bayar_kamar.nama = data_pengguna.nama
        
        where tanggal_bayar 
        BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal_bayar ASC");

        return $query->result();
    }

    function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*, ansuran.*, sisa_ansuran.*, data_pengguna.*
		FROM data_bayar_kamar
		INNER JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
		INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
		INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
		INNER JOIN data_pengguna ON data_bayar_kamar.nama = data_pengguna.nama
         where YEAR(tanggal_bayar) = '$tahun1' and MONTH(tanggal_bayar)
        BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal_bayar ASC");

        return $query->result();
    }

    function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT data_bayar_kamar.*, data_kamar.*, ansuran.*, sisa_ansuran.*, data_pengguna.*
		FROM data_bayar_kamar
		INNER JOIN data_kamar ON data_bayar_kamar.id_kamar = data_kamar.id_kamar
		INNER JOIN ansuran ON data_bayar_kamar.id_ansuran = ansuran.id_ansuran
		INNER JOIN sisa_ansuran ON data_bayar_kamar.id_sisa = sisa_ansuran.id_sisa
		INNER JOIN data_pengguna ON data_bayar_kamar.nama = data_pengguna.nama
         where YEAR(tanggal_bayar) = '$tahun2' ORDER BY tanggal_bayar ASC");

        return $query->result();
    }

    function getkamar()
    {
        $query = $this->db->query("SELECT YEAR(kamar) AS tahun FROM data_kamar 
        GROUP BY YEAR(kamar) ORDER BY YEAR(kamar) ASC");

        return $query->result();
    }
}