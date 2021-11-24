<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daya_dukungfpsskp extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Daya Dukung Fasilitasi Penghargaan - Sarpras dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'sarpras' => $this->Daya_dukung_sarpras_model->get()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ddfpskp/daya_dukungfpsskp', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
