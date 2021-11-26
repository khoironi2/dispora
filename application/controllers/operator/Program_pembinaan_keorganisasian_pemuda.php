<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_pembinaan_keorganisasian_pemuda extends CI_Controller
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
            'page' => 'Data Program Pembinaan Keorganisasian Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Program_dan_pembinaan_keorganisasian_model->get(),
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/program_pembinaan_keorganisasian_pemuda', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function save()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_program' => $this->input->post('nama_program'),
            'capaian_akhir' => $this->input->post('capaian_akhir'),
            'periode' => $this->input->post('periode'),
            'status_terlaksana' => $this->input->post('status_terlaksana'),
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $insert = $this->Program_dan_pembinaan_keorganisasian_model->insert("tbl_program_dan_pembinaan_keorganisasian", $data);

        if ($insert) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui!</div>');
            redirect('operator/program_pembinaan_keorganisasian_pemuda');
        } else {

            echo "error";
        }
    }

    public function update()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_program' => $this->input->post('nama_program'),
            'capaian_akhir' => $this->input->post('capaian_akhir'),
            'periode' => $this->input->post('periode'),
            'status_terlaksana' => $this->input->post('status_terlaksana'),
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $id = $this->input->post('id_program_keorganisasian');
        $insert = $this->Program_dan_pembinaan_keorganisasian_model->update($id, $data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui!</div>');
            redirect('operator/program_pembinaan_keorganisasian_pemuda');
        } else {

            echo "error";
        }
    }


    public function delete($id)
    {
        $data['id_program_keorganisasian'] = $this->Program_dan_pembinaan_keorganisasian_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/program_pembinaan_keorganisasian_pemuda');
    }
}
