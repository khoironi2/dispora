<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psdpbanten extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Peta Sumber Daya Pemuda Banten'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1psdpb/psdpbanten', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
