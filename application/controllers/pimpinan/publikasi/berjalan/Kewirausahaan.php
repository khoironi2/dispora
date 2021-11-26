<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewirausahaan extends CI_Controller
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
            'page' => 'Data Pertukan Pelajar Antar Negara',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getall' => $this->Seleksi_kewirausahaan_muda_pemula_model->getAll(),
        ];
        $this->load->view('template/pimpinan/header', $data);
        $this->load->view('template/pimpinan/sidebar');
        $this->load->view('pimpinan/publikasi/berjalan/kewirausahaan', $data);
        $this->load->view('template/pimpinan/footer', $data);
    }
}
