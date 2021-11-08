<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Universal extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Universal'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/universal', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
