<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        if ($this->CI->session->userdata['level_user'] != 'pemuda') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Dashboard',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/pemuda/header', $data);
        $this->load->view('template/pemuda/sidebar');
        $this->load->view('pemuda/dashboard', $data);
        $this->load->view('template/pemuda/footer', $data);
    }
}
