<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        if ($this->CI->session->userdata['level_user'] != 'pimpinan') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Dataku',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Permintaan_data_model->get(),
            'terkirim' => $this->Permintaan_data_model->terkirim(),
            'dibalas' => $this->Permintaan_data_model->dibalas(),
            'revisi' => $this->Permintaan_data_model->revisi()
        ];
        $this->load->view('template/pimpinan/header', $data);
        $this->load->view('template/pimpinan/sidebar');
        $this->load->view('pimpinan/dataku', $data);
        $this->load->view('template/pimpinan/footer', $data);
    }
}
