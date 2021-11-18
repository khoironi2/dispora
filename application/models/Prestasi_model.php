<?php

class Prestasi_model extends CI_Model
{

    public function getBySes()
    {
        $this->db->select('*,
        prestasi.id_prestasi_pemuda as id_prestasi');
        $this->db->from('tbl_prestasi_pemuda as prestasi');
        $this->db->join('tbl_user as user', 'user.id_user=prestasi.id_pemuda_prestasi', 'left');
        $this->db->where('user.id_user', $this->session->userdata('id_user'));
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_prestasi_pemuda');
        $this->db->join('tbl_user as user', 'user.id_user=tbl_prestasi_pemuda.id_pemuda_prestasi', 'left');
        $this->db->where('user.id_user', $id);
        $result = $this->db->get();

        return $result->row_array();
    }


    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_prestasi_pemuda', $id);
        $this->db->update('tbl_prestasi_pemuda', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_prestasi_pemuda', $id);
        $this->db->delete('tbl_prestasi_pemuda');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
