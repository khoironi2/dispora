<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        $this->CI = &get_instance();
        // $this->load->library('session');
        if ($this->CI->session->userdata['level_user'] != 'pemuda') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Data Prestasi',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'wilayah' => $this->Wilayah_model->get_provinsi(),
            'UserWilayah' => $this->User_model->getWilayah(),
            'getBySes' => $this->Prestasi_model->getBySes()
        ];
        $this->load->view('template/pemuda/header', $data);
        $this->load->view('template/universal/sidebar');
        $this->load->view('pemuda/prestasi', $data);
        $this->load->view('template/pemuda/footer', $data);
    }

    public function save()
    {

        $this->form_validation->set_rules('tingkat_prestasi', 'tingkat_prestasi', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('pemuda/prestasi');
        } else {

            $tingkat_prestasi = $this->input->post('tingkat_prestasi');
            $nama_prestasi = $this->input->post('nama_prestasi');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'tingkat_prestasi' => $tingkat_prestasi,
                'nama_prestasi' => $nama_prestasi,
                'id_pemuda_prestasi' => $this->session->userdata('id_user')
            ];

            $insert = $this->Prestasi_model->insert("tbl_prestasi_pemuda", $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahakan data</div>');
                redirect('pemuda/prestasi');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menambahakan data</div>');
                redirect('pemuda/prestasi');

                echo "error";
            }
        }
    }
    public function editData()
    {

        $this->form_validation->set_rules('id_prestasi_pemuda', 'id_prestasi_pemuda', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('pemuda/prestasi');
        } else {

            $tingkat_prestasi = $this->input->post('tingkat_prestasi');
            $nama_prestasi = $this->input->post('nama_prestasi');
            $data = [
                'tingkat_prestasi' => $tingkat_prestasi,
                'nama_prestasi' => $nama_prestasi
            ];

            $id = $this->input->post('id_prestasi_pemuda');

            $insert = $this->Prestasi_model->update($id, $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
                redirect('pemuda/prestasi');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {
        $data['id_prestasi_pemuda'] = $this->Prestasi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('pemuda/prestasi');
    }
}
