<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan_keterampilan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Peserta Pelatihan Keterampilan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Pelatihan_keterampilan_model->getpublik()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2pbspfspkp/pelatihan_keterampilan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
