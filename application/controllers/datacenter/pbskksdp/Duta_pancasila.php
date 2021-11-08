<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Duta_pancasila extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'page' => 'Data Duta Pancasila'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/pbskksdp/duta_pancasila', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
