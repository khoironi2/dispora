<?php

class Proposal_sarpras_model extends CI_Model
{


    public function get()
    {
        $this->db->select('*,
        d.nama as kabupaten,
        a.periode as periode_proposal,
        c.nama as dibuat_oleh
        ');
        $this->db->from('tbl_proposal_sarpras as a');
        $this->db->join('tbl_user as c', 'c.id_user=a.id_pengusul', 'left');
        $this->db->join('kabupaten as d', 'd.id_kab=c.id_kabupaten_kota', 'left');
        $this->db->order_by('a.id_proposal_sarpras', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }



    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_proposal_sarpras', $id);
        $this->db->update('tbl_proposal_sarpras', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_proposal_sarpras', $id);
        $this->db->delete('tbl_proposal_sarpras');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
