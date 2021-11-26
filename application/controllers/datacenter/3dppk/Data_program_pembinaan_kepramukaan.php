<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_program_pembinaan_kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab3',
            'page' => 'Data Program dan Pembinaan Kepramukaan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Program_dan_pembinaan_kepramukaan_model->get()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3dppk/data_program_pembinaan_kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
