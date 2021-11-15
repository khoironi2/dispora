<?php

class Pengaturan_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('pengaturan');
        $result = $this->db->get();

        return $result->result_array();
    }


    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
