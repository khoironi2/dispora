<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
        ];
        $this->load->view('sign', $data);
    }
}
