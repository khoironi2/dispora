<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2019 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2019'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3ctpkkpdb/tahun2019', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
