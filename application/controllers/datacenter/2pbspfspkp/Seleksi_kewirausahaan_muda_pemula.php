<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi_kewirausahaan_muda_pemula extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Seleksi Kewirausahaan Muda Pemula'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2pbspfspkp/seleksi_kewirausahaan_muda_pemula', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
