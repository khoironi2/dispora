<?php
class Beranda_model extends CI_Model
{

    public function get()
    {
        $this->db->select('*,
        a.timestamp as waktu');
        $this->db->from('tbl_diskusi as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_diskusi');
        $this->db->order_by('a.timestamp', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function getID($id)
    {
        $this->db->select('*,
        a.timestamp as waktu');
        $this->db->from('tbl_diskusi as a');
        $this->db->join('tbl_user as b', 'b.id_user=a.id_user_diskusi');
        $this->db->where('a.id_diskusi', $id);
        $result = $this->db->get();

        return $result->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_diskusi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function update($id, $data)
    {
        $this->db->where('id_diskusi', $id);
        $this->db->update('tbl_diskusi', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function delete($id)
    {
        $this->db->where('id_diskusi', $id);
        $this->db->delete('tbl_diskusi');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }


    public function reply1($data)
    {
        $this->db->insert('tbl_reply_diskusi_1', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function getReply1($id)
    {
        $this->db->select('*,
        a.timestamp as waktu');
        $this->db->from('tbl_reply_diskusi_1 as a');
        $this->db->join('tbl_diskusi as b', 'b.id_diskusi=a.id_reply_1_diskusi');
        $this->db->join('tbl_user as c', 'c.id_user=a.id_user_reply_1_diskusi');
        $this->db->where('a.id_reply_1_diskusi', $id);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function deleteReply1($id)
    {
        $this->db->where('id_reply_1', $id);
        $this->db->delete('tbl_reply_diskusi_1');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
