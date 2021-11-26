<?php

class Permintaan_data_model extends CI_Model
{
    public function get()
    {
        $this->db->select('*,
        a.periode as periode_permintaan,
        b.nama as pimpinan,
        c.nama as pengirim
        ');
        $this->db->from('tbl_permintaan_data as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_pimpinan', 'left');
        $this->db->join('tbl_user as c', 'c.id_user=a.id_operator', 'left');
        $this->db->order_by('a.id_permintaan_data', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function terkirim()
    {
        $this->db->select('*');
        $this->db->from('tbl_permintaan_data as a');
        $this->db->where('a.status_permintaan', '1');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function dibalas()
    {
        $this->db->select('*');
        $this->db->from('tbl_permintaan_data as a');
        $this->db->where('a.status_permintaan', '2');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function revisi()
    {
        $this->db->select('*');
        $this->db->from('tbl_permintaan_data as a');
        $this->db->where('a.status_permintaan', '3');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function getID($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_permintaan_data as a');
        $this->db->where('a.id_permintaan_data', $id);
        $result = $this->db->get();

        return $result->result_array();
    }


    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_permintaan_data', $id);
        $this->db->update('tbl_permintaan_data', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_permintaan_data', $id);
        $this->db->delete('tbl_permintaan_data');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
