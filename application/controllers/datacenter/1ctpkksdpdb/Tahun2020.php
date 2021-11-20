<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2020 extends CI_Controller
{

    public function index()
    {

        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Tahun 2020',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Papn_model->getpublik(),
        ];

        $get2020 = $this->Capaian_target_kepeloporan_model->get2020();
        $data['capaian'] = json_encode($get2020);
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/1ctpkksdpdb/tahun2020', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
