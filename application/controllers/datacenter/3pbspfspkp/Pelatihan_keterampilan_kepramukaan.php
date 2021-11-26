<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan_keterampilan_kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Pelatihan Keterampilan Kepramukaan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Pelatihan_keterampilan_kepramukaan_model->getpublik()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/pelatihan_keterampilan_kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
