<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proposal_sarpras_kegiatan_kewirausahaan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Proposal Sarana Prasarana dan Kegiatan Kewirausahaan Pemuda'
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2pspkkp/proposal_sarpras_kegiatan_kewirausahaan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
