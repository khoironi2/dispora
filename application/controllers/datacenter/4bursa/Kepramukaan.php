<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepramukaan extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'getbursa' => $this->Kemah_bakti_pramuka_model->getbursa(),
            'getketerampilan' => $this->Pelatihan_keterampilan_kepramukaan_model->getbursa(),
            'getknpi' => $this->Knpi_model->getbursa(),
            'getldk' => $this->Ldk_model->getbursa(),
            'getrevitalisasi' => $this->Revitalisasi_kepemudaan_model->getbursa(),
            'getevaluasi' => $this->Evaluasi_kepemudaan_model->getbursa(),
            'getperijinan' => $this->Perijinan_organisasi_kepemudaan_model->getbursa()
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
            'tab' => 'tab1',
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


    public function keterampilan_kepramukaan($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Pelatihan_keterampilan_kepramukaan_model->getbursaByID($id),
            'getMy' => $this->Pelatihan_keterampilan_kepramukaan_model->getMy($id),

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
        $this->load->view('datacenter/4bursa/pramuka/detail_keterampilan_kepramukaan', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarketerampilan_kepramukaan()
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

        $insert = $this->Pelatihan_keterampilan_kepramukaan_model->insert("tbl_pendaftar_pelatihan_keterampilan_kepramukaan", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function knpi($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Knpi_model->getbursaByID($id),
            'getMy' => $this->Knpi_model->getMy($id),

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
        $this->load->view('datacenter/4bursa/pramuka/detail_knpi', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarknpi()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'nama_komite' =>  $this->input->post('nama_komite'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Knpi_model->insert("tbl_pendaftar_knpi", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function ldk($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Ldk_model->getbursaByID($id),
            'getMy' => $this->Ldk_model->getMy($id),

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
        $this->load->view('datacenter/4bursa/pramuka/detail_ldk', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarldk()
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

        $insert = $this->Ldk_model->insert("tbl_pendaftar_ldk", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function revitalisasi($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Revitalisasi_kepemudaan_model->getbursaByID($id),
            'getMy' => $this->Revitalisasi_kepemudaan_model->getMy($id),

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
        $this->load->view('datacenter/4bursa/pramuka/detail_revitalisasi', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarrevitalisasi()
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

        $insert = $this->Revitalisasi_kepemudaan_model->insert("tbl_pendaftar_revitalisasi_kepemudaan", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function evaluasi($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Evaluasi_kepemudaan_model->getbursaByID($id),
            'getMy' => $this->Evaluasi_kepemudaan_model->getMy($id),

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
        $this->load->view('datacenter/4bursa/pramuka/detail_evaluasi', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarevaluasi()
    {
        // $id_bursa_kegiatan = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'saran' =>  $this->input->post('saran'),
            'rating' =>  $this->input->post('rating'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Evaluasi_kepemudaan_model->insert("tbl_pendaftar_evaluasi_kepemudaan", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('datacenter/4bursa/kkp');
        } else {

            echo "error";
        }
    }

    public function perijinan($id)
    {


        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Bursa Kepramukaan dan Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'userWilayah' => $this->Wilayah_model->UserWilayah(),
            'MyRegister' => $this->Paskibraka_model->MyRegister(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'getBursaID' => $this->Perijinan_organisasi_kepemudaan_model->getbursaByID($id),
            'getMy' => $this->Perijinan_organisasi_kepemudaan_model->getMy($id),

            'totalPendaftarPaskib' => $this->Bursa_kegiatan_model->totalPendaftarPaskib(),
            'bursapaskibraka' => $this->Bursa_kegiatan_model->getpaskibraka(),
            'bursapemudapelopor' => $this->Bursa_kegiatan_model->getpemudapelopor(),
            'bursapapn' => $this->Bursa_kegiatan_model->getpapn(),
            'bursalbb' => $this->Bursa_kegiatan_model->getlbb(),
            'bursaltub' => $this->Bursa_kegiatan_model->getltub(),
            'bursadp' => $this->Bursa_kegiatan_model->getdp(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get_kabupaten' => $this->Wilayah_model->get_kabupaten()
        ];
        $this->load->view('template/universal/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('datacenter/4bursa/pramuka/detail_perijinan', $data);
        $this->load->view('template/universal/footer', $data);
    }


    public function daftarperijinan()
    {
        $id = $this->input->post('id_bursa_kegiatan');
        $periode = $this->input->post('periode');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'id_bursa_kegiatan' =>  $this->input->post('id_bursa_kegiatan'),
            'nama_ketua' =>  $this->input->post('nama_ketua'),
            'nama_organisasi' =>  $this->input->post('nama_organisasi'),
            'alamat' =>  $this->input->post('alamat'),
            'kabupaten_kota' =>  $this->input->post('kabupaten_kota'),
            'id_user_pemuda' => $this->session->userdata('id_user'),
            'periode' => $periode,
            'status_lulus' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Perijinan_organisasi_kepemudaan_model->insert("tbl_pendaftar_perijinan_organisasi_kepemudaan", $data);

        if ($insert) {
            // echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            redirect('datacenter/4bursa/kepramukaan/perijinan/' . $id);
        } else {

            echo "error";
        }
    }
}
