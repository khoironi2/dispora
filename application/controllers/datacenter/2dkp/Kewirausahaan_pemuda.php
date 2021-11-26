<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kewirausahaan_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Seleksi_kewirausahaan_muda_pemula_model->getpublik()

        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2dkp/kewirausahaan_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
