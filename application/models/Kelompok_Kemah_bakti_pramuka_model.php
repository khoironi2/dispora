<?php

class Kelompok_Kemah_bakti_pramuka_model extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        e.id_bursa_kegiatan as id_bursa,
        c.nama as user,
        d.nama as kabupaten
        ');
        $this->db->from('tbl_anggota_kelompok_kemah_bakti_pramuka as a');
        $this->db->join('tbl_pendaftar_kemah_bakti_pramuka as b', 'b.id_pendaftar_kemah_bakti_pramuka=a.id_pendaftar', 'left');
        $this->db->join('tbl_user as c', 'c.id_user=b.id_user_pemuda', 'left');
        $this->db->join('kabupaten as d', 'd.id_kab=c.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan as e', 'e.id_bursa_kegiatan=b.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as f', 'f.id_jenis_kegiatan=e.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('f.nama_jenis_kegiatan', 'KEMAH BHAKTI PRAMUKA');
        $this->db->order_by('a.id_anggota_kelompok ', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getID($id)
    {
        $this->db->select('*,
        b.id_bursa_kegiatan id_bursa_daftar,
        e.id_bursa_kegiatan as id_bursa,
        c.nama as user,
        d.nama as kabupaten
        ');
        $this->db->from('tbl_anggota_kelompok_kemah_bakti_pramuka as a');
        $this->db->join('tbl_pendaftar_kemah_bakti_pramuka as b', 'b.id_pendaftar_kemah_bakti_pramuka=a.id_pendaftar', 'left');
        $this->db->join('tbl_user as c', 'c.id_user=b.id_user_pemuda', 'left');
        $this->db->join('kabupaten as d', 'd.id_kab=c.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan as e', 'e.id_bursa_kegiatan=b.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as f', 'f.id_jenis_kegiatan=e.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $this->db->where('a.id_pendaftar', $id);
        $this->db->where('f.nama_jenis_kegiatan', 'KEMAH BHAKTI PRAMUKA');
        $this->db->order_by('a.id_anggota_kelompok ', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }




    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_anggota_kelompok ', $id);
        $this->db->update('tbl_anggota_kelompok_kemah_bakti_pramuka', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_anggota_kelompok ', $id);
        $this->db->delete('tbl_anggota_kelompok_kemah_bakti_pramuka');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
