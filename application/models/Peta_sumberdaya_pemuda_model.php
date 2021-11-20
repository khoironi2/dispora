<?php
class Peta_sumberdaya_pemuda_model extends CI_Model
{


    public function get_sumberdaya_pemuda()
    {
        $this->db->select('*,
        b.nama as kabupaten,
        count(a.id_user) as jumlah');
        $this->db->from('tbl_user as a');
        $this->db->join('kabupaten as b', 'b.id_kab=a.id_kabupaten_kota', 'left');
        $this->db->join('provinsi as c', 'c.id_prov=b.id_prov', 'left');
        $this->db->where('c.nama', 'BANTEN');
        $this->db->group_by('b.nama');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get_ID_kab($id)
    {
        $this->db->select('*,
        a.nama as user,
        a.institusi_asal as sekolah,
        a.foto_user as foto');
        $this->db->from('tbl_user as a');
        $this->db->join('kabupaten as b', 'b.id_kab=a.id_kabupaten_kota', 'left');
        $this->db->join('provinsi as c', 'c.id_prov=b.id_prov', 'left');
        $this->db->where('b.id_kab', $id);
        $this->db->order_by('a.nama', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
}
