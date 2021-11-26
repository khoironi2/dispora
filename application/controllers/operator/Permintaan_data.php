<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan_data extends CI_Controller
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
            'page' => 'Permintaan Data',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Permintaan_data_model->get(),
            'terkirim' => $this->Permintaan_data_model->terkirim(),
            'dibalas' => $this->Permintaan_data_model->dibalas(),
            'revisi' => $this->Permintaan_data_model->revisi()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/permintaan_data', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_permintaan_data');
        $query = $this->db->get_where('tbl_permintaan_data', ['id_permintaan_data' => $id])->row_array();
        $old = $query["file_permintaan_data"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/data/permintaan/';
        $config['allowed_types']     = 'jpg|png|svg|pdf|doc|csv|jpeg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('file_permintaan_data')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/data/permintaan//' . $old);

            $upload_data = array('uploads' => $this->upload->data());
            date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                'keterangan_pengirim' => $this->input->post('keterangan_pengirim'),
                'nama_file' => $this->input->post('nama_file'),
                'id_operator' => $this->session->userdata('id_user'),
                'periode' => date('Y'),
                'status_permintaan' => '2',
                'timestamp' => date('Y-m-d H:i:s'),
                'file_permintaan_data' => $upload_data['uploads']['file_name']
            );
            $insert = $this->Permintaan_data_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
                redirect('operator/permintaan_data');
            } else {

                echo "error";
            }
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
        redirect('operator/permintaan_data');
    }
}
