<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psarpraskwu extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getkwup' => $this->Seleksi_kewirausahaan_muda_pemula_model->getkwup(),
            'getGelarKarya' => $this->Gelar_karya_pemuda_model->get(),
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/psarpraskwu', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function kwup($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getpaskibdepan' => $this->Bursa_kegiatan_model->getpaskibdepanByID($id),
            'getMy' => $this->Seleksi_kewirausahaan_muda_pemula_model->getMy($id),
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
        $this->load->view('datacenter/4bursa/kwup/detail', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftarkwup()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'nama_usaha' =>  $this->input->post('nama_usaha'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Bursa_kegiatan_model->insert("tbl_pendaftar_seleksi_kewirausahaan_muda_pemula", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }


    public function gelarkarya($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getpaskibdepan' => $this->Bursa_kegiatan_model->getpaskibdepanByID($id),
            'getMy' => $this->Gelar_karya_pemuda_model->getMy($id),
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
        $this->load->view('datacenter/4bursa/kwup/detail_gelar_karya', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftargelarkarya()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'judul_karya' =>  $this->input->post('judul_karya'),
            'deskripsi_karya' =>  $this->input->post('deskripsi_karya'),
            'link_video_karya' =>  $this->input->post('link_video_karya'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Bursa_kegiatan_model->insert("tbl_pendaftar_gelar_karya_pemuda", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }
}
