<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun2019 extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab2',
            'page' => 'Data Capaian Target Program Penghargaan Tahun 2019',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getpublik' => $this->Papn_model->getpublik()
        ];
        $get2019 = $this->Capaian_target_penghargaan_sarpras_kwu_model->get2019();
        $data['capaian'] = json_encode($get2019);
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/2ctppfspkpdb/tahun2019', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
