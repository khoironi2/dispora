<?php

class Daya_dukung_sarpras_model extends CI_Model
{


    public function get()
    {
        $this->db->select('*,
        b.nama as kabupaten,
        a.periode as periode_sarpras,
        c.nama as dibuat_oleh
        ');
        $this->db->from('tbl_daya_dukung_sarpras as a');
        $this->db->join('kabupaten as b', 'b.id_kab=a.kabupaten_kota', 'left');
        $this->db->join('tbl_user as c', 'c.id_user=a.created_by', 'left');
        $this->db->order_by('a.id_daya_dukung_sarpras', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }



    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_daya_dukung_sarpras', $id);
        $this->db->update('tbl_daya_dukung_sarpras', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_daya_dukung_sarpras', $id);
        $this->db->delete('tbl_daya_dukung_sarpras');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
