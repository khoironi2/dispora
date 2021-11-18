<?php

class Bursa_kegiatan_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getpaskibdepan()
    {
        $this->db->select('*,
        tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan', 'right');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        $this->db->group_by('tbl_bursa_kegiatan.id_bursa_kegiatan');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getpaskibdepanByID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $result = $this->db->get();

        return $result->row_array();
    }
    public function getpaskibrakaMy($id)
    {
        $this->db->select('*,
        tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_kegiatan_paskibraka.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        $this->db->group_by('tbl_pendaftar_kegiatan_paskibraka.id_pendaftar_kegiatan_paskibraka');
        $result = $this->db->get();

        return $result->row_array();
    }
    public function totalPendaftarPaskib()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        // $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_kegiatan_paskibraka.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan');
        // $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        // $this->db->group_by('tbl_bursa_kegiatan.id_bursa_kegiatan');
        $result = $this->db->get();

        return $result->num_rows();
    }
    public function getpaskibraka()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getpemudapelopor()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PEMUDA PELOPOR');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getpapn()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PERTUKARAN PELAJAR ANTAR NEGARA');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getlbb()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'LOMBA BARIS BERBARIS');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getltub()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'LOMBA TATA UPACARA BENDERA');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getdp()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'DUTA PANCASILA');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_bursa_kegiatan', $id);
        $this->db->update('tbl_bursa_kegiatan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_bursa_kegiatan', $id);
        $this->db->delete('tbl_bursa_kegiatan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
