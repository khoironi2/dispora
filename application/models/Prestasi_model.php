<?php

class Prestasi_model extends CI_Model
{

    public function getall()
    {
        $this->db->select('*,
        b.nama as user,
        a.id_prestasi_pemuda as id_prestasi,
        c.nama as kabupaten
        ');
        $this->db->from('tbl_prestasi_pemuda as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_pemuda_prestasi', 'left');
        $this->db->join('kabupaten as c', 'c.id_kab=b.id_kabupaten_kota', 'left');
        $this->db->group_by('b.id_user');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function detail($id)
    {
        $this->db->select('*,
        b.nama as user,
        a.id_prestasi_pemuda as id_prestasi,
        c.nama as kabupaten
        ');
        $this->db->from('tbl_prestasi_pemuda as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_pemuda_prestasi', 'left');
        $this->db->join('kabupaten as c', 'c.id_kab=b.id_kabupaten_kota', 'left');
        $this->db->where('a.id_pemuda_prestasi', $id);
        $result = $this->db->get();

        return $result->result_array();
    }
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
