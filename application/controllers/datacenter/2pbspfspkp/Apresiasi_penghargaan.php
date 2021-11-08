<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apresiasi_penghargaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Apresiasi keterampilan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2pbspfspkp/apresiasi_penghargaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}