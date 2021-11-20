<?php
class Wilayah_model extends CI_Model
{

    public function get_provinsi()
    {
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->order_by('nama', 'ASC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get_kabupaten()
    {
        $this->db->select('*,
        a.nama as kabupaten');
        $this->db->from('kabupaten as a');
        $this->db->join('provinsi as b', 'b.id_prov=a.id_prov', 'left');
        $this->db->where('b.nama', 'BANTEN');
        $this->db->order_by('a.nama', 'ASC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function UserWilayah()
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

        return $result->row_array();
    }
}
