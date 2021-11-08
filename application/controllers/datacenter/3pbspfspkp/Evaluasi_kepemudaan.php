<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Evaluasi_kepemudaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Evaluasi Kepemudaan'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/evaluasi_kepemudaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
