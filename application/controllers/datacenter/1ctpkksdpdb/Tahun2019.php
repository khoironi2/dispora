<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2019 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Data Tahun 2019'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1ctpkksdpdb/tahun2019', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
