<?php

class Universal_model extends CI_Model
{

    public function jumlahpemuda()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level_user', 'Pemuda');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getlakilaki()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level_user', 'Pemuda');
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getperempuan()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level_user', 'Pemuda');
        $this->db->where('jenis_kelamin', 'Perempuan');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function getu20kebawah()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level_user', 'Pemuda');
        $this->db->where('usia <', '20');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function getu20keatas()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('level_user', 'Pemuda');
        $this->db->where('usia >', '20');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function totalbalasan()
    {
        $this->db->select('*');
        $this->db->from('tbl_reply_diskusi_1 as a');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function totaldiskusi()
    {
        $this->db->select('*');
        $this->db->from('tbl_diskusi as a');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getuseronline()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('status_aktif', '1');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getbursatotal()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function getkepeloporan()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.seksi_kegiatan', '1');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function getkwu()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.seksi_kegiatan', '2');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getkepramukaan()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.seksi_kegiatan', '3');
        $result = $this->db->get();

        return $result->num_rows();
    }


    public function getWilayah()
    {
        $this->db->select('*,
        provinsi.nama as provinsi,
        kabupaten.nama as kabupaten,
        kecamatan.nama as kecamatan,
        kelurahan.nama as kelurahan
        ');
        $this->db->from('tbl_user');
        $this->db->join('provinsi', 'provinsi.id_prov=tbl_user.id_provinsi', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kec=tbl_user.id_kecamatan', 'left');
        $this->db->join('kelurahan', 'kelurahan.id_kel=tbl_user.id_kelurahan', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $result = $this->db->get();

        return $result->result_array();
    }


    public function cek_login($email)
    {

        $hasil = $this->db->where('email', $email)->limit(1)->get('tbl_user');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function logout($data, $email)
    {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tbl_user');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
