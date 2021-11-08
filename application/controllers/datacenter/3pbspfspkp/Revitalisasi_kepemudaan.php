<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Revitalisasi_kepemudaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Revitalisasi Kepemudaan'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/revitalisasi_kepemudaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
