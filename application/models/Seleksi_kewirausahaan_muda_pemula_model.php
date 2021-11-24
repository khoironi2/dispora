<?php

class Seleksi_kewirausahaan_muda_pemula_model extends CI_Model
{


    public function getkwup()
    {
        $this->db->select('*');
        $this->db->from('tbl_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'SELEKSI KEWIRAUSAHAAN MUDA PEMULA');
        $this->db->order_by('id_bursa_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getpublik()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        d.id_bursa_kegiatan as id_bursa,
        b.nama as user,
        c.nama as kabupaten,
        a.periode as periode_usaha
        ');
        $this->db->from('tbl_pendaftar_seleksi_kewirausahaan_muda_pemula as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_pemuda', 'left');
        $this->db->join('kabupaten as c', 'c.id_kab=b.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan d', 'd.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as e', 'e.id_jenis_kegiatan=d.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('a.status_lulus', '2');
        $this->db->where('e.nama_jenis_kegiatan', 'SELEKSI KEWIRAUSAHAAN MUDA PEMULA');
        $this->db->order_by('a.id_pendaftar_seleksi_kewirausahaan_muda_pemula', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getAll()
    {
        $this->db->select('*,
        a.id_bursa_kegiatan id_bursa_daftar,
        d.id_bursa_kegiatan as id_bursa,
        b.nama as user,
        c.nama as kabupaten,
        a.periode as periode_papn
        ');
        $this->db->from('tbl_pendaftar_seleksi_kewirausahaan_muda_pemula as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_pemuda', 'left');
        $this->db->join('kabupaten as c', 'c.id_kab=b.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan as d', 'd.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as e', 'e.id_jenis_kegiatan=d.id_jenis', 'left');
        // $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        // $this->db->where('tbl_bursa_kegiatan.id_bursa_kegiatan', $id);
        $this->db->where('e.nama_jenis_kegiatan', 'SELEKSI KEWIRAUSAHAAN MUDA PEMULA');
        $this->db->order_by('a.id_pendaftar_seleksi_kewirausahaan_muda_pemula', 'DESC');
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
        c.id_bursa_kegiatan as id_bursa
        ');
        $this->db->from('tbl_pendaftar_seleksi_kewirausahaan_muda_pemula as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_pemuda', 'left');
        $this->db->join('tbl_bursa_kegiatan as c', 'c.id_bursa_kegiatan=a.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as d', 'd.id_jenis_kegiatan=c.id_jenis', 'left');
        $this->db->where('b.id_user', $this->session->userdata('id_user'));
        $this->db->where('c.id_bursa_kegiatan', $id);
        $this->db->where('d.nama_jenis_kegiatan', 'SELEKSI KEWIRAUSAHAAN MUDA PEMULA');
        $this->db->group_by('a.id_pendaftar_seleksi_kewirausahaan_muda_pemula');
        $result = $this->db->get();

        return $result->row_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pendaftar_seleksi_kewirausahaan_muda_pemula', $id);
        $this->db->update('tbl_pendaftar_seleksi_kewirausahaan_muda_pemula', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_pendaftar_seleksi_kewirausahaan_muda_pemula', $id);
        $this->db->delete('tbl_pendaftar_seleksi_kewirausahaan_muda_pemula');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
