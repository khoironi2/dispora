<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Papn extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Data Pertukaran Pelajar Antar Negara'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/pbskksdp/papn', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
