<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bursa_kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        $this->CI = &get_instance();
        // $this->load->library('session');
        if ($this->CI->session->userdata['level_user'] != 'pimpinan') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Bursa Kegiatan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/pimpinan/header', $data);
        $this->load->view('template/pimpinan/sidebar');
        $this->load->view('pimpinan/publikasi/bursa_kegiatan', $data);
        $this->load->view('template/pimpinan/footer', $data);
    }
}
