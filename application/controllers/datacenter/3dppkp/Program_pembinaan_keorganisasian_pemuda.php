<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_pembinaan_keorganisasian_pemuda extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Program dan Pembinaan Keorganisasian Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Program_dan_pembinaan_keorganisasian_model->get()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3dppkp/program_pembinaan_keorganisasian_pemuda', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
