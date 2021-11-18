<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kkp extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getpaskibdepan' => $this->Bursa_kegiatan_model->getpaskibdepan(),
            // 'getpaskibrakaMy' => $this->Bursa_kegiatan_model->getpaskibrakaMy(),
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
        $this->load->view('datacenter/4bursa/kkp', $data);
        $this->load->view('template/universal/footer', $data);
    }
    public function paskib($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getpaskibdepan' => $this->Bursa_kegiatan_model->getpaskibdepanByID($id),
            'getpaskibrakaMy' => $this->Bursa_kegiatan_model->getpaskibrakaMy($id),
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
        $this->load->view('datacenter/4bursa/kkp/detail', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftarpaskibraka()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Bursa_kegiatan_model->insert("tbl_pendaftar_kegiatan_paskibraka", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function pelopor($id)
    {
        $id_user = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $iduser = $id_user['id_user'];
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Pemuda_pelopor_model->getbursaByID($id),
            'getMy' => $this->Pemuda_pelopor_model->getpeloporMy($id),
            'prestasi' => $this->Prestasi_model->get($iduser),
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
        $this->load->view('datacenter/4bursa/kkp/detail_pelopor', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftarpelopor()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Pemuda_pelopor_model->insert("tbl_pendaftar_pemuda_pelopor", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }
}
