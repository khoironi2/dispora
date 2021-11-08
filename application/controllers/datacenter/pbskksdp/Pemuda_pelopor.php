<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemuda_pelopor extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Data Pemuda Pelopor'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/pbskksdp/pemuda_pelopor', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
