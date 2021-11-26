<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Universal extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Universal',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'jumlahpemuda' => $this->Universal_model->jumlahpemuda(),
            'getlakilaki' => $this->Universal_model->getlakilaki(),
            'getperempuan' => $this->Universal_model->getperempuan(),
            'getu20kebawah' => $this->Universal_model->getu20kebawah(),
            'getu20keatas' => $this->Universal_model->getu20keatas(),
            'totalbalasan' => $this->Universal_model->totalbalasan(),
            'totaldiskusi' => $this->Universal_model->totaldiskusi(),
            'getuseronline' => $this->Universal_model->getuseronline(),
            'getbursatotal' => $this->Universal_model->getbursatotal(),
            'getkepeloporan' => $this->Universal_model->getkepeloporan(),
            'getkwu' => $this->Universal_model->getkwu(),
            'getkepramukaan' => $this->Universal_model->getkepramukaan()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/universal', $data);
        $this->load->view('template/universal/footer', $data);
    }
}
