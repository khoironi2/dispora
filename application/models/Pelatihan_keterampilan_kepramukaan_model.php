<?php

class Pelatihan_keterampilan_kepramukaan_model extends CI_Model
{
    public function getbursa()
    {
        $this->db->select('*,
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_pelatihan_keterampilan_kepramukaan');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan', 'right');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PELATIHAN KETERAMPILAN KEPRAMUKAAN');
        $this->db->group_by('tbl_bursa_kegiatan.id_bursa_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getpublik()
    {
        $this->db->select('*,
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa,
        tbl_user.nama as user,
        kabupaten.nama as kabupaten,
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.periode as periode_kemah
        ');
        $this->db->from('tbl_pendaftar_pelatihan_keterampilan_kepramukaan');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('tbl_pendaftar_pelatihan_keterampilan_kepramukaan.status_lulus', '2');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PELATIHAN KETERAMPILAN KEPRAMUKAAN');
        $this->db->order_by('tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_pendaftar_pelatihan_keterampilan_kepramukaan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getAll()
    {
        $this->db->select('*,
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa,
        tbl_user.nama as user,
        kabupaten.nama as kabupaten,
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.periode as periode_papn
        ');
        $this->db->from('tbl_pendaftar_pelatihan_keterampilan_kepramukaan');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PELATIHAN KETERAMPILAN KEPRAMUKAAN');
        $this->db->order_by('tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_pendaftar_pelatihan_keterampilan_kepramukaan', 'DESC');
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
        tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_pelatihan_keterampilan_kepramukaan');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PELATIHAN KETERAMPILAN KEPRAMUKAAN');
        $this->db->group_by('tbl_pendaftar_pelatihan_keterampilan_kepramukaan.id_pendaftar_pelatihan_keterampilan_kepramukaan');
        $result = $this->db->get();

        return $result->row_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pendaftar_pelatihan_keterampilan_kepramukaan', $id);
        $this->db->update('tbl_pendaftar_pelatihan_keterampilan_kepramukaan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_pendaftar_pelatihan_keterampilan_kepramukaan', $id);
        $this->db->delete('tbl_pendaftar_pelatihan_keterampilan_kepramukaan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
