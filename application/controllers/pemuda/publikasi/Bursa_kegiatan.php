<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bursa_kegiatan extends CI_Controller
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
            'page' => 'Data Bursa Kegiatan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'bursakegiatan' => $this->Bursa_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/publikasi/bursa_kegiatan', $data);
        $this->load->view('template/operator/footer', $data);
    }
    public function save()
    {

        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('operator/publikasi/bursa_kegiatan');
        } else {

            $id_jenis = $this->input->post('id_jenis');
            $keterangan = $this->input->post('keterangan');
            // $persentase_capaian = $this->input->post('persentase_capaian');
            $periode = $this->input->post('periode');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'id_jenis' => $id_jenis,
                'keterangan' => $keterangan,
                'persentase_capaian' => '30',
                'status_selesai' => '1',
                'periode' => $periode,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Bursa_kegiatan_model->insert("tbl_bursa_kegiatan", $data);

            if ($insert) {
                echo "success";
                // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
                // redirect('/dispora/sign');
            } else {

                echo "error";
            }
        }
    }
    public function editData()
    {

        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('operator/publikasi/bursa_kegiatan');
        } else {

            $id_jenis = $this->input->post('id_jenis');
            $keterangan = $this->input->post('keterangan');
            $periode = $this->input->post('periode');
            $persentase_capaian = $this->input->post('persentase_capaian');
            $status_selesai = $this->input->post('status_selesai');
            $data = [
                'id_jenis' => $id_jenis,
                'keterangan' => $keterangan,
                'periode' => $periode,
                'persentase_capaian' => $persentase_capaian,
                'status_selesai' => $status_selesai,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $id = $this->input->post('id_bursa_kegiatan');

            $insert = $this->Bursa_kegiatan_model->update($id, $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
                redirect('operator/publikasi/bursa_kegiatan');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {
        $data['id_bursa_kegiatan'] = $this->Bursa_kegiatan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/publikasi/bursa_kegiatan');
    }
}
