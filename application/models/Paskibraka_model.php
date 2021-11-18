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
}
