<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan_data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        if ($this->CI->session->userdata['level_user'] != 'pimpinan') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Permintaan Data',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Permintaan_data_model->get(),
            'terkirim' => $this->Permintaan_data_model->terkirim(),
            'dibalas' => $this->Permintaan_data_model->dibalas(),
            'revisi' => $this->Permintaan_data_model->revisi()
        ];
        $this->load->view('template/pimpinan/header', $data);
        $this->load->view('template/pimpinan/sidebar');
        $this->load->view('pimpinan/permintaan_data', $data);
        $this->load->view('template/pimpinan/footer', $data);
    }

    public function save()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = array(
            'keterangan_peminta' => $this->input->post('keterangan_peminta'),
            'id_pimpinan' => $this->session->userdata('id_user'),
            'periode' => date('Y'),
            'status_permintaan' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        );

        $insert = $this->Permintaan_data_model->insert('tbl_permintaan_data', $data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
            redirect('pimpinan/permintaan_data');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
            redirect('pimpinan/permintaan_data');
            // echo "error";
        }
    }

    public function update()
    {
        $id = $this->input->post('id_permintaan_data');
        date_default_timezone_set("ASIA/JAKARTA");
        $data = array(
            'keterangan_peminta' => $this->input->post('keterangan_peminta'),
            'id_pimpinan' => $this->session->userdata('id_user'),
            'periode' => date('Y'),
            'status_permintaan' => '3',
            'timestamp' => date('Y-m-d H:i:s')
        );

        $insert = $this->Permintaan_data_model->update($id, $data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
            redirect('pimpinan/permintaan_data');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
            redirect('pimpinan/permintaan_data');
            // echo "error";
        }
    }


    public function delete($id)
    {

        $data = [
            'kreatifitas' => $this->db->get_where('tbl_permintaan_data', ['id_permintaan_data' => $id])->row_array(),
        ];

        $old_image = $data["kreatifitas"]["file_foto_kreativitas"];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kreatifitas/' . $old_image);
        }
        $this->db->delete('tbl_permintaan_data', ['id_permintaan_data' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('pimpinan/permintaan_data');
    }
}
