<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_program_pembinaan_kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Program dan Pembinaan Kepramukaan'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3dppk/data_program_pembinaan_kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
