<?php
class Kerjasama_kepeloporan_model extends CI_Model
{


    public function get()
    {
        $this->db->select('*,a.status_aktif as aktif,
        b.status_aktif as status_aktif_user');
        $this->db->from('tbl_kerjasama_kepeloporan_kepemimpinan as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.created_by');
        $this->db->order_by('a.id_kerjasama_kk', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get_internal()
    {
        $this->db->select('*,a.status_aktif as aktif,
        b.status_aktif as status_aktif_user');
        $this->db->from('tbl_kerjasama_kepeloporan_kepemimpinan as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.created_by');
        $this->db->where('a.status_kerjasama', 'Internal');
        $this->db->order_by('a.id_kerjasama_kk', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function get_eksternal()
    {
        $this->db->select('*,a.status_aktif as aktif,
        b.status_aktif as status_aktif_user');
        $this->db->from('tbl_kerjasama_kepeloporan_kepemimpinan as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.created_by');
        $this->db->where('a.status_kerjasama', 'Eksternal');
        $this->db->order_by('a.id_kerjasama_kk', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_kerjasama_kk', $id);
        $this->db->update('tbl_kerjasama_kepeloporan_kepemimpinan', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_kerjasama_kk', $id);
        $this->db->delete('tbl_kerjasama_kepeloporan_kepemimpinan');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
