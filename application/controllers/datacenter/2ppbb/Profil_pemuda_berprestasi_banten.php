<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_pemuda_berprestasi_banten extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Profil Pemuda Berprestasi Banten'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ppbb/profil_pemuda_berprestasi_banten', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
