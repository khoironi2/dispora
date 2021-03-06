<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2021 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Capaian Target Program Penghargaan Tahun 2021',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Papn_model->getpublik()
        ];
        $get2021 = $this->Capaian_target_penghargaan_sarpras_kwu_model->get2021();
        $data['capaian'] = json_encode($get2021);
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ctppfspkpdb/tahun2021', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
