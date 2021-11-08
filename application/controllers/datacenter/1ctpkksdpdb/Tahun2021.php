<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2021 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Tahun 2021'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1ctpkksdpdb/tahun2021', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
