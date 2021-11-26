<?php

class Capaian_target_kepramukaan_model extends CI_Model
{

    public function get2019()
    {
        $this->db->select('b.id_jenis_kegiatan,
        b.nama_jenis_kegiatan,
        a.periode,
        sum(a.status_selesai) as jumlah');
        $this->db->from('tbl_bursa_kegiatan as a');
        $this->db->join('tbl_jenis_kegiatan as b', 'b.id_jenis_kegiatan=a.id_jenis');
        $this->db->where('a.periode', '2019');
        $this->db->where('b.seksi_kegiatan', '3');
        $this->db->group_by('b.nama_jenis_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get2020()
    {
        $this->db->select('b.id_jenis_kegiatan,
        b.nama_jenis_kegiatan,
        a.periode,
        sum(a.status_selesai) as jumlah');
        $this->db->from('tbl_bursa_kegiatan as a');
        $this->db->join('tbl_jenis_kegiatan as b', 'b.id_jenis_kegiatan=a.id_jenis');
        $this->db->where('a.periode', '2020');
        $this->db->where('b.seksi_kegiatan', '3');
        $this->db->group_by('b.nama_jenis_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get2021()
    {
        $this->db->select('b.id_jenis_kegiatan,
        b.nama_jenis_kegiatan,
        a.periode,
        sum(a.status_selesai) as jumlah');
        $this->db->from('tbl_bursa_kegiatan as a');
        $this->db->join('tbl_jenis_kegiatan as b', 'b.id_jenis_kegiatan=a.id_jenis');
        $this->db->where('a.periode', '2021');
        $this->db->where('b.seksi_kegiatan', '3');
        $this->db->group_by('b.nama_jenis_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }
}
