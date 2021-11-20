<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psdpbanten extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Peta Sumber Daya Pemuda Banten',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get_sumberdaya_pemuda' => $this->Peta_sumberdaya_pemuda_model->get_sumberdaya_pemuda(),
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1psdpb/psdpbanten', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function kabupaten($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Peta Sumber Daya Pemuda Banten',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get_sumberdaya_pemuda' => $this->Peta_sumberdaya_pemuda_model->get_sumberdaya_pemuda(),
            'get_ID_kab' => $this->Peta_sumberdaya_pemuda_model->get_ID_kab($id),
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1psdpb/kabupaten', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
