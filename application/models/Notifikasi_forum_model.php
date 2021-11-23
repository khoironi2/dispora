<?php
class Notifikasi_forum_model extends CI_Model
{

    public function get()
    {
        $this->db->select(
            '*,
        a.timestamp as waktu_balas,
        
        b.timestamp as waktu_diskusi,
        c.nama as dibalas_oleh,
        c.foto_user dibalas_oleh_foto,
        d.nama as nama_punya_status
        '
        );
        $this->db->from('tbl_reply_diskusi_1 as a');
        $this->db->join('tbl_diskusi as b', 'b.id_diskusi=a.id_reply_1_diskusi');
        $this->db->join('tbl_user as c', 'c.id_user=a.id_user_reply_1_diskusi');
        $this->db->join('tbl_user as d', 'd.id_user=b.id_user_diskusi');
        // $this->db->where('b.id_user_diskusi', $this->session->userdata('id_user'));
        $this->db->order_by('a.timestamp', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }


    public function update($id, $data)
    {
        $this->db->where('id_reply_1', $id);
        $this->db->update('tbl_reply_diskusi_1', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
