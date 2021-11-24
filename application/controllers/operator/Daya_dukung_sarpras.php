<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daya_dukung_sarpras extends CI_Controller
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
            'page' => 'Data Daya Dukung Fasilitasi Penghargaan, Sarpras dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Daya_dukung_sarpras_model->get(),
            'get_kabupaten' => $this->Wilayah_model->get_kabupaten()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/daya_dukung_sarpras', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function save()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'nama_sarpras' => $this->input->post('nama_sarpras'),
            'jenis_sarpras' => $this->input->post('jenis_sarpras'),
            'alamat_sarpras' => $this->input->post('alamat_sarpras'),
            'kepemilikan_sarpras' => $this->input->post('kepemilikan_sarpras'),
            'kondisi_sarpras' => $this->input->post('kondisi_sarpras'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
            'periode' => $this->input->post('periode'),
            'timestamp' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id_user')
        ];

        $insert = $this->Daya_dukung_sarpras_model->insert("tbl_daya_dukung_sarpras", $data);

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
            'nama_sarpras' => $this->input->post('nama_sarpras'),
            'jenis_sarpras' => $this->input->post('jenis_sarpras'),
            'alamat_sarpras' => $this->input->post('alamat_sarpras'),
            'kepemilikan_sarpras' => $this->input->post('kepemilikan_sarpras'),
            'kondisi_sarpras' => $this->input->post('kondisi_sarpras'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
            'periode' => $this->input->post('periode'),
            'timestamp' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id_user')
        ];
        $id = $this->input->post('id_daya_dukung_sarpras');
        $insert = $this->Daya_dukung_sarpras_model->update($id, $data);

        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui!</div>');
            redirect('operator/daya_dukung_sarpras');
        } else {

            echo "error";
        }
    }


    public function delete($id)
    {
        $data['id_daya_dukung_sarpras'] = $this->Daya_dukung_sarpras_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/daya_dukung_sarpras');
    }
}
