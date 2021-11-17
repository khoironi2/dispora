<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_kegiatan extends CI_Controller
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
            'page' => 'Data Jenis Kegiatan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'jeniskegiatan' => $this->Jenis_kegiatan_model->get(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/publikasi/jenis_kegiatan', $data);
        $this->load->view('template/operator/footer', $data);
    }
    public function save()
    {

        $this->form_validation->set_rules('nama_jenis_kegiatan', 'nama_jenis_kegiatan', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('operator/publikasi/jenis_kegiatan');
        } else {

            $nama_jenis_kegiatan = $this->input->post('nama_jenis_kegiatan');
            $data = [
                'nama_jenis_kegiatan' => $nama_jenis_kegiatan,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $insert = $this->Jenis_kegiatan_model->insert("tbl_jenis_kegiatan", $data);

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

        $this->form_validation->set_rules('nama_jenis_kegiatan', 'nama_jenis_kegiatan', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/admin/user');
        } else {

            $nama_jenis_kegiatan = $this->input->post('nama_jenis_kegiatan');
            $data = [
                'nama_jenis_kegiatan' => $nama_jenis_kegiatan,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $id = $this->input->post('id_jenis_kegiatan');

            $insert = $this->Jenis_kegiatan_model->update($id, $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
                redirect('operator/publikasi/jenis_kegiatan');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {
        $data['id_jenis_kegiatan'] = $this->Jenis_kegiatan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/publikasi/jenis_kegiatan');
    }
}
