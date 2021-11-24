<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getbursa' => $this->Kemah_bakti_pramuka_model->getbursa()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function kemah($id)
    {
        $id_pendaftaran = $this->Kemah_bakti_pramuka_model->getMy($id);

        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Kemah_bakti_pramuka_model->getbursaByID($id),
            'getMy' => $this->Kemah_bakti_pramuka_model->getMy($id),

            $getID = $id_pendaftaran['id_pendaftar_kemah_bakti_pramuka'],
            'kelompok' => $this->Kelompok_Kemah_bakti_pramuka_model->getID($getID),
            'totalPendaftarPaskib' => $this->Bursa_kegiatan_model->totalPendaftarPaskib(),
            'bursapaskibraka' => $this->Bursa_kegiatan_model->getpaskibraka(),
            'bursapemudapelopor' => $this->Bursa_kegiatan_model->getpemudapelopor(),
            'bursapapn' => $this->Bursa_kegiatan_model->getpapn(),
            'bursalbb' => $this->Bursa_kegiatan_model->getlbb(),
            'bursaltub' => $this->Bursa_kegiatan_model->getltub(),
            'bursadp' => $this->Bursa_kegiatan_model->getdp(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/pramuka/detail_kemah', $data);
        $this->load->view('template/universal/footer', $data);
    }
    public function tambahkelompokkemah()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $nama_anggota = $this->input->post('nama_anggota');
        $id_pendaftar = $this->input->post('id_pendaftar');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_anggota' => $nama_anggota,
            'id_pendaftar' => $id_pendaftar
        ];

        $insert = $this->Kemah_bakti_pramuka_model->insert("tbl_anggota_kelompok_kemah_bakti_pramuka", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function daftarkemah()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'kwarda' =>  $this->input->post('kwarda'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Kemah_bakti_pramuka_model->insert("tbl_pendaftar_kemah_bakti_pramuka", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }
}
