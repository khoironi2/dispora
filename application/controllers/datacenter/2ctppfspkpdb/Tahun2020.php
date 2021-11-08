<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2020 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Capaian Target Program Penghargaan Tahun 2020'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ctppfspkpdb/tahun2020', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
