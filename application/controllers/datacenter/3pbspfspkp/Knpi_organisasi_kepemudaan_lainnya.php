<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Knpi_organisasi_kepemudaan_lainnya extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data KNPI dan Ornasisai Kepemudaan Lainnya'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/knpi_organisasi_kepemudaan_lainnya', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
