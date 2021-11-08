<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ldk extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Latikan Dasar Kepemimpinan'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/ldk', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
