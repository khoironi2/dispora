<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lbb extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Data Lomba Baris Berbaris'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/pbskksdp/lbb', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
