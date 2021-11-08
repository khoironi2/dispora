<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan_keterampilan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Pelatihan Keterampilan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2pbspfspkp/pelatihan_keterampilan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
