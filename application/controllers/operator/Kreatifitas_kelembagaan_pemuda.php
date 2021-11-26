<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kreatifitas_kelembagaan_pemuda extends CI_Controller
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
            'page' => 'Data Kreatifitas Kelembagaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Kreatifitas_lembaga_pemuda_model->get()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/kreatifitas_kelembagaan_pemuda', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function save()
    {
        // $query = $this->db->get_where('tbl_kreatifitas_lembaga_pemuda', ['id_kreatifitas_lembaga_pemuda' => $id])->row_array();
        // $old = $query["file_foto_kreativitas"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/img/kreatifitas/';
        $config['allowed_types']     = 'jpg|png|svg|pdf|doc|csv|jpeg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('file_foto_kreativitas')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            // unlink(FCPATH . 'assets/img/kreatifitas/' . $old);

            $upload_data = array('uploads' => $this->upload->data());
            date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                'nama_program_kreativitas' => $this->input->post('nama_program_kreativitas'),
                'capaian_akhir' => $this->input->post('capaian_akhir'),
                'periode' => $this->input->post('periode'),
                'status_terlaksana' => '2',
                'timestamp' => date('Y-m-d H:i:s'),
                'file_foto_kreativitas' => $upload_data['uploads']['file_name']
            );

            // $id = $this->input->post('id_kreatifitas_lembaga_pemuda');

            $insert = $this->Kreatifitas_lembaga_pemuda_model->insert('tbl_kreatifitas_lembaga_pemuda', $data);

            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
                redirect('operator/kreatifitas_kelembagaan_pemuda');
            } else {

                echo "error";
            }
        }
    }

    public function update()
    {
        $id = $this->input->post('id_kreatifitas_lembaga_pemuda');
        $query = $this->db->get_where('tbl_kreatifitas_lembaga_pemuda', ['id_kreatifitas_lembaga_pemuda' => $id])->row_array();
        $old = $query["file_foto_kreativitas"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/img/kreatifitas/';
        $config['allowed_types']     = 'jpg|png|svg|pdf|doc|csv|jpeg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('file_foto_kreativitas')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/img/kreatifitas//' . $old);

            $upload_data = array('uploads' => $this->upload->data());
            date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                'nama_program_kreativitas' => $this->input->post('nama_program_kreativitas'),
                'capaian_akhir' => $this->input->post('capaian_akhir'),
                'periode' => $this->input->post('periode'),
                'status_terlaksana' => '2',
                'timestamp' => date('Y-m-d H:i:s'),
                'file_foto_kreativitas' => $upload_data['uploads']['file_name']
            );
            $insert = $this->Kreatifitas_lembaga_pemuda_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
                redirect('operator/kreatifitas_kelembagaan_pemuda');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {

        $data = [
            'kreatifitas' => $this->db->get_where('tbl_kreatifitas_lembaga_pemuda', ['id_kreatifitas_lembaga_pemuda' => $id])->row_array(),
        ];

        $old_image = $data["kreatifitas"]["file_foto_kreativitas"];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kreatifitas/' . $old_image);
        }
        $this->db->delete('tbl_kreatifitas_lembaga_pemuda', ['id_kreatifitas_lembaga_pemuda' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/kreatifitas_kelembagaan_pemuda');
    }
}
