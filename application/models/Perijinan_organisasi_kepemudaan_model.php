<?php

class Perijinan_organisasi_kepemudaan_model extends CI_Model
{
    public function getbursa()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_perijinan_organisasi_kepemudaan as a');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=a.id_bursa_kegiatan', 'right');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PERIJINAN ORGANISASI KEPEMUDAAN');
        $this->db->group_by('tbl_bursa_kegiatan.id_bursa_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getpublik()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa,
        tbl_user.nama as user,
        kabupaten.nama as kabupaten,
        a.periode as periode_kemah
        ');
        $this->db->from('tbl_pendaftar_perijinan_organisasi_kepemudaan as a');
        $this->db->join('tbl_user', 'tbl_user.id_user=a.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=a.kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('a.status_lulus', '2');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PERIJINAN ORGANISASI KEPEMUDAAN');
        $this->db->order_by('a.id_pendaftar_perijinan_organisasi_kepemudaan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getAll()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa,
        tbl_user.nama as user,
        kabupaten.nama as kabupaten,
        a.periode as periode_papn
        ');
        $this->db->from('tbl_pendaftar_perijinan_organisasi_kepemudaan as a');
        $this->db->join('tbl_user', 'tbl_user.id_user=a.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=a.kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PERIJINAN ORGANISASI KEPEMUDAAN');
        $this->db->order_by('a.id_pendaftar_perijinan_organisasi_kepemudaan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getbursaByID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $result = $this->db->get();

        return $result->row_array();
    }
    public function getMy($id)
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_perijinan_organisasi_kepemudaan as a');
        $this->db->join('tbl_user', 'tbl_user.id_user=a.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PERIJINAN ORGANISASI KEPEMUDAAN');
        $this->db->group_by('a.id_pendaftar_perijinan_organisasi_kepemudaan');
        $result = $this->db->get();

        return $result->row_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pendaftar_perijinan_organisasi_kepemudaan', $id);
        $this->db->update('tbl_pendaftar_perijinan_organisasi_kepemudaan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_pendaftar_perijinan_organisasi_kepemudaan', $id);
        $this->db->delete('tbl_pendaftar_perijinan_organisasi_kepemudaan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
