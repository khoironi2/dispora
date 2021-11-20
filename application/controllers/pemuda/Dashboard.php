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
            'page' => 'Aktivitas',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'paskibraka' => $this->History_kegiatan_user_model->paskibraka(),
            'pemuda_pelopor' => $this->History_kegiatan_user_model->pemuda_pelopor(),
            'pertukaran_pelajar_antar_negara' => $this->History_kegiatan_user_model->pertukaran_pelajar_antar_negara(),
            'lomba_baris_berbaris' => $this->History_kegiatan_user_model->lomba_baris_berbaris(),
            'lomba_tata_upacara_bendera' => $this->History_kegiatan_user_model->lomba_tata_upacara_bendera(),
            'duta_pancasila' => $this->History_kegiatan_user_model->duta_pancasila(),
        ];
        $this->load->view('template/pemuda/header', $data);
        $this->load->view('template/pemuda/sidebar');
        $this->load->view('pemuda/dashboard', $data);
        $this->load->view('template/pemuda/footer', $data);
    }
}
