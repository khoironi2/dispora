<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psarpraskwu extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/psarpraskwu', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
