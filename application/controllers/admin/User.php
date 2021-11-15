<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        $this->CI = &get_instance();
        // $this->load->library('session');
        if ($this->CI->session->userdata['level_user'] != 'admin') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Manajemen Akses User',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'usernotadmin' => $this->User_model->getnotAdmin()
        ];
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function delete($id)
    {
        $data['id_user'] = $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('admin/user');
    }
}
