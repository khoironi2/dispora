<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perijinan_organisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        $this->CI = &get_instance();
        // $this->load->library('session');
        if ($this->CI->session->userdata['level_user'] != 'operator') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Perijinan Organisasi',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getall' => $this->Perijinan_organisasi_kepemudaan_model->getAll(),
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/publikasi/berjalan/perijinan_organisasi', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function setuju($id)
    {
        $idpaskib = $this->db->get_where('tbl_pendaftar_perijinan_organisasi_kepemudaan', ['id_pendaftar_perijinan_organisasi_kepemudaan' => $id])->row_array();
        $status_lulus = "";

        if ($idpaskib['status_lulus'] == "1") {
            $status_lulus = "2";
        } else {
            $status_lulus = "2";
        }

        $data = array(
            'id_pendaftar_perijinan_organisasi_kepemudaan'         => $id,
            'status_lulus'     => $status_lulus
        );

        $insert =  $this->Perijinan_organisasi_kepemudaan_model->update($id, $data);
        if ($insert) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
            redirect('operator/publikasi/berjalan/perijinan_organisasi');
        } else {

            echo "error";
        }
    }


    public function batalkan($id)
    {
        $idpaskib = $this->db->get_where('tbl_pendaftar_perijinan_organisasi_kepemudaan', ['id_pendaftar_perijinan_organisasi_kepemudaan' => $id])->row_array();
        $status_lulus = "";

        if ($idpaskib->status_lulus == "2") {
            $status_lulus = "1";
        } else {
            $status_lulus = "1";
        }

        $data = array(
            'id_pendaftar_perijinan_organisasi_kepemudaan'         => $id,
            'status_lulus'     => $status_lulus
        );

        $insert =  $this->Perijinan_organisasi_kepemudaan_model->update($id, $data);
        if ($insert) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
            redirect('operator/publikasi/berjalan/perijinan_organisasi');
        } else {

            echo "error";
        }
    }
}
