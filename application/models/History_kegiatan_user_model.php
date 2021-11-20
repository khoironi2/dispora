<?php
class History_kegiatan_user_model extends CI_Model
{


    public function paskibraka()
    {
        $this->db->select('*,
        a.timestamp as waktu');
        $this->db->from('tbl_pendaftar_kegiatan_paskibraka as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_pemuda');
        $this->db->join('tbl_bursa_kegiatan as c', 'c.id_bursa_kegiatan=a.id_bursa_kegiatan');
        $this->db->join('tbl_jenis_kegiatan as d', 'd.id_jenis_kegiatan=c.id_jenis');
        $this->db->where('b.id_user', $this->session->userdata('id_user'));
        $result = $this->db->get();

        return $result->result_array();
    }
}
