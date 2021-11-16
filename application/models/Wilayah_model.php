<?php
class Wilayah_model extends CI_Model
{

    public function get_provinsi()
    {
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->order_by('nama', 'ASC');
        $result = $this->db->get();

        return $result->result_array();
    }
}
