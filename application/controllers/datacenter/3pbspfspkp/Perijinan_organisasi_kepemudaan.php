<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perijinan_organisasi_kepemudaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Perijinan Organisasi Kepemudaan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Perijinan_organisasi_kepemudaan_model->getpublik()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/3pbspfspkp/perijinan_organisasi_kepemudaan', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
