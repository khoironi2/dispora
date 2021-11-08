<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kreatifitas_kelembagaan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Kreatifitas Kelembagaan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3dkkp/kreatifitas_kelembagaan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
