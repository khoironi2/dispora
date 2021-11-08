<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kemah_bakti_pemula extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Kemah Bakti Pramuka'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/kemah_bakti_pemula', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
