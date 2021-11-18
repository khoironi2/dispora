<?php

class Pemuda_pelopor_model extends CI_Model
{

    public function getbursaByID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $result = $this->db->get();

        return $result->row_array();
    }
    public function getpeloporMy($id)
    {
        $this->db->select('*,
        tbl_pendaftar_pemuda_pelopor.id_bursa_kegiatan id_bursa_daftar,
        tbl_bursa_kegiatan.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_pemuda_pelopor');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_pemuda_pelopor.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_pemuda_pelopor.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('jenis.nama_jenis_kegiatan', 'PEMUDA PELOPOR');
        $this->db->group_by('tbl_pendaftar_pemuda_pelopor.id_pendaftar_pemuda_pelopor');
        $result = $this->db->get();

        return $result->row_array();
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
