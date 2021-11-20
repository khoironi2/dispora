<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerjasama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        if ($this->CI->session->userdata['level_user'] != 'operator') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Kerjasama Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda DISPORA Banten',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Kerjasama_kepeloporan_model->get(),
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/kerjasama', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function save()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'lembaga_mitra' => $this->input->post('lembaga_mitra'),
            'level_kerjasama' => $this->input->post('level_kerjasama'),
            'status_kerjasama' => $this->input->post('status_kerjasama'),
            'bentuk_kerjasama' => $this->input->post('bentuk_kerjasama'),
            'nomor_kerjasama' => $this->input->post('nomor_kerjasama'),
            'tanggal_penandatanganan_kerjasama' => $this->input->post('tanggal_penandatanganan_kerjasama'),
            'periode_awal_kerjasama' => $this->input->post('periode_awal_kerjasama'),
            'periode_akhir_kerjasama' => $this->input->post('periode_akhir_kerjasama'),
            'komponen_kerjasama' => $this->input->post('komponen_kerjasama'),
            'status_aktif' => $this->input->post('status_aktif'),
            'nilai_kontrak' => $this->input->post('nilai_kontrak'),
            'periode' => $this->input->post('periode'),
            'timestamp' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id_user')
        ];

        $insert = $this->Kerjasama_kepeloporan_model->insert("tbl_kerjasama_kepeloporan_kepemimpinan", $data);

        if ($insert) {
            echo "success";
            // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
            // redirect('/dispora/sign');
        } else {

            echo "error";
        }
    }

    public function update()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'lembaga_mitra' => $this->input->post('lembaga_mitra'),
            'level_kerjasama' => $this->input->post('level_kerjasama'),
            'status_kerjasama' => $this->input->post('status_kerjasama'),
            'bentuk_kerjasama' => $this->input->post('bentuk_kerjasama'),
            'nomor_kerjasama' => $this->input->post('nomor_kerjasama'),
            'tanggal_penandatanganan_kerjasama' => $this->input->post('tanggal_penandatanganan_kerjasama'),
            'periode_awal_kerjasama' => $this->input->post('periode_awal_kerjasama'),
            'periode_akhir_kerjasama' => $this->input->post('periode_akhir_kerjasama'),
            'komponen_kerjasama' => $this->input->post('komponen_kerjasama'),
            'status_aktif' => $this->input->post('status_aktif'),
            'nilai_kontrak' => $this->input->post('nilai_kontrak'),
            'periode' => $this->input->post('periode'),
            'timestamp' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id_user')
        ];
        $id = $this->input->post('id_kerjasama_kk');
        $insert = $this->Kerjasama_kepeloporan_model->update($id, $data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui!</div>');
            redirect('operator/kerjasama');
        } else {

            echo "error";
        }
    }


    public function delete($id)
    {
        $data['id_kerjasama_kk'] = $this->Kerjasama_kepeloporan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/kerjasama');
    }
}
