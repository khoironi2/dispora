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
            'usernotadmin' => $this->User_model->getnotAdmin(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/publikasi/jenis_kegiatan', $data);
        $this->load->view('template/operator/footer', $data);
    }
    public function register()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/sign');
        } else {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $level = $this->input->post('level_user');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => $pass,
                'level_user' => $level,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $insert = $this->User_model->register("tbl_user", $data);

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

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/admin/user');
        } else {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $level = $this->input->post('level_user');
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nama' => $nama,
                'email' => $email,
                'level_user' => $level,
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $id = $this->input->post('id_user');

            $insert = $this->User_model->update($id, $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di perbarui !</div>');
                redirect('admin/user');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {
        $data['id_user'] = $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('admin/user');
    }
}
