<?php

class Program_dan_pembinaan_kepramukaan_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('tbl_program_dan_pembinaan_kepramukaan as a');
        $this->db->order_by('a.id_program_kepramukaan', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_program_dan_pembinaan_kepramukaan as a');
        $this->db->where('a.id_program_kepramukaan', $id);
        $result = $this->db->get();

        return $result->result_array();
    }


    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_program_kepramukaan', $id);
        $this->db->update('tbl_program_dan_pembinaan_kepramukaan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_program_kepramukaan', $id);
        $this->db->delete('tbl_program_dan_pembinaan_kepramukaan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
