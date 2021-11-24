<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_pemuda_berprestasi_banten extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Profil Pemuda Berprestasi Banten',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getall' => $this->Prestasi_model->getall()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ppbb/profil_pemuda_berprestasi_banten', $data);
        $this->load->view('template/universal/footer', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Profil Pemuda Berprestasi Banten',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getall' => $this->Prestasi_model->detail($id)
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ppbb/detail', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
