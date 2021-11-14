<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'title1' => 'Dinas Olahraga dan Kepemudaan',
            'title2' => 'Provinsi &amp; Banten'
        ];
        $this->load->view('template_branch/header', $data);
        $this->load->view('branch', $data);
        $this->load->view('template_branch/footer', $data);
    }
}
