<?php

class Jenis_kegiatan_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('tbl_jenis_kegiatan');
        // $level = array('admin');
        // $this->db->where_not_in('level_user', $level);
        $this->db->order_by('id_jenis_kegiatan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id_jenis_kegiatan', $id);
        $this->db->update('tbl_jenis_kegiatan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_jenis_kegiatan', $id);
        $this->db->delete('tbl_jenis_kegiatan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
