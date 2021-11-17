<?php

class User_model extends CI_Model
{
    public function getnotAdmin()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        // $level = array('admin');
        // $this->db->where_not_in('level_user', $level);
        $this->db->order_by('id_user', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
    }
    public function getWilayah()
    {
        $this->db->select('*,
        provinsi.nama as provinsi,
        kabupaten.nama as kabupaten,
        kecamatan.nama as kecamatan,
        kelurahan.nama as kelurahan
        ');
        $this->db->from('tbl_user');
        $this->db->join('provinsi', 'provinsi.id_prov=tbl_user.id_provinsi', 'left');
        $this->db->join('kabupaten', 'kabupaten.id_kab=tbl_user.id_kabupaten_kota', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kec=tbl_user.id_kecamatan', 'left');
        $this->db->join('kelurahan', 'kelurahan.id_kel=tbl_user.id_kelurahan', 'left');
        $this->db->where('tbl_user.id_user', $this->session->userdata('id_user'));
        $result = $this->db->get();

        return $result->result_array();
    }

    public function cek_login($email)
    {

        $hasil = $this->db->where('email', $email)->limit(1)->get('tbl_user');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function logout($data, $email)
    {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tbl_user');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
