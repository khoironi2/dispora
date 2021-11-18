<?php
class Paskibraka_model extends CI_Model
{


    public function MyRegister()
    {
        $this->db->select('*');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_kegiatan_paskibraka.id_user_pemuda');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $result = $this->db->get();

        return $result->row_array();
    }
    public function getpublik()
    {
        $this->db->select('*,
        tbl_user.nama as user,
        tbl_bursa_kegiatan.periode as periode_bursa,
        kabupaten.nama as kabupaten');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_kegiatan_paskibraka.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        $this->db->where('tbl_pendaftar_kegiatan_paskibraka.status_lulus', '2');
        $this->db->order_by('tbl_pendaftar_kegiatan_paskibraka.id_pendaftar_kegiatan_paskibraka', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getall()
    {
        $this->db->select('*,
        tbl_user.nama as user,
        tbl_bursa_kegiatan.periode as periode_bursa,
        kabupaten.nama as kabupaten');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka');
        $this->db->join('tbl_user', 'tbl_user.id_user=tbl_pendaftar_kegiatan_paskibraka.id_user_pemuda', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('tbl_bursa_kegiatan', 'tbl_bursa_kegiatan.id_bursa_kegiatan=tbl_pendaftar_kegiatan_paskibraka.id_bursa_kegiatan', 'left');
        $this->db->join('tbl_jenis_kegiatan as jenis', 'jenis.id_jenis_kegiatan=tbl_bursa_kegiatan.id_jenis', 'left');
        $this->db->where('jenis.nama_jenis_kegiatan', 'PASKIBRAKA');
        $this->db->order_by('tbl_pendaftar_kegiatan_paskibraka.id_pendaftar_kegiatan_paskibraka', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_pendaftar_kegiatan_paskibraka', $id);
        $this->db->update('tbl_pendaftar_kegiatan_paskibraka', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
