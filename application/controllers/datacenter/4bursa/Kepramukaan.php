<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
