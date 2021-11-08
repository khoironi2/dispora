<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_pembinaan_keorganisasian_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Program dan Pembinaan Keorganisasian Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3dppkp/program_pembinaan_keorganisasian_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
