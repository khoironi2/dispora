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

    public function papn($id)
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
            'getBursaID' => $this->Papn_model->getbursaByID($id),
            'getMy' => $this->Papn_model->getpapnMy($id),
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
        $this->load->view('datacenter/4bursa/kkp/detail_papn', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftarpapn()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        $penempatan = $this->input->post('penempatan');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'penempatan' => $penempatan,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Papn_model->insert("tbl_pendaftar_pertukaran_pelajar_antar_negara", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function lbb($id)
    {
        $id_pendaftaran = $this->LombaBB_model->getMy($id);

        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->LombaBB_model->getbursaByID($id),
            'getMy' => $this->LombaBB_model->getMy($id),

            $getID = $id_pendaftaran['id_pendaftar_lomba_baris'],
            'kelompok' => $this->Kelompok_LombaBB_model->getID($getID),
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
        $this->load->view('datacenter/4bursa/kkp/detail_lbb', $data);
        $this->load->view('template/universal/footer', $data);
    }
    public function tambahkelompoklbb()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $nama_anggota = $this->input->post('nama_anggota');
        $id_pendaftar = $this->input->post('id_pendaftar');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_anggota' => $nama_anggota,
            'id_pendaftar' => $id_pendaftar
        ];

        $insert = $this->Kelompok_LombaBB_model->insert("tbl_anggota_kelompok_lomba_baris_berbaris", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function daftarlbb()
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

        $insert = $this->LombaBB_model->insert("tbl_pendaftar_lomba_baris_berbaris", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }
    public function ltub($id)
    {
        $id_pendaftaran = $this->LombaTUB_model->getMy($id);

        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab4',
            'page' => 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->LombaTUB_model->getbursaByID($id),
            'getMy' => $this->LombaTUB_model->getMy($id),

            $getID = $id_pendaftaran['id_pendaftar_lomba_tata_upacara_bendera'],
            'kelompok' => $this->Kelompok_LombaTUB_model->getID($getID),
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
        $this->load->view('datacenter/4bursa/kkp/detail_ltub', $data);
        $this->load->view('template/universal/footer', $data);
    }
    public function tambahkelompokltub()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $nama_anggota = $this->input->post('nama_anggota');
        $id_pendaftar = $this->input->post('id_pendaftar');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_anggota' => $nama_anggota,
            'id_pendaftar' => $id_pendaftar
        ];

        $insert = $this->LombaTUB_model->insert("tbl_anggota_kelompok_lomba_tata_upacara_bendera", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function daftarltub()
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

        $insert = $this->LombaTUB_model->insert("tbl_pendaftar_lomba_tata_upacara_bendera", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function duta_pancasila($id)
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
            'getBursaID' => $this->Duta_pancasila_model->getbursaByID($id),
            'getMy' => $this->Duta_pancasila_model->getpapnMy($id),
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
        $this->load->view('datacenter/4bursa/kkp/detail_duta_pancasila', $data);
        $this->load->view('template/universal/footer', $data);
    }

    public function daftarduta_pancasila()
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

        $insert = $this->Duta_pancasila_model->insert("tbl_pendaftar_duta_pancasila", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }
}
