<?php

class Kreatifitas_lembaga_pemuda_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('tbl_kreatifitas_lembaga_pemuda as a');
        $this->db->order_by('a.id_kreatifitas_lembaga_pemuda', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kreatifitas_lembaga_pemuda as a');
        $this->db->where('a.id_kreatifitas_lembaga_pemuda', $id);
        $result = $this->db->get();

        return $result->result_array();
    }


    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_kreatifitas_lembaga_pemuda', $id);
        $this->db->update('tbl_kreatifitas_lembaga_pemuda', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_kreatifitas_lembaga_pemuda', $id);
        $this->db->delete('tbl_kreatifitas_lembaga_pemuda');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
