<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewirausahaan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Kewirausahaan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2dkp/kewirausahaan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
