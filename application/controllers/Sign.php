<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'title1' => 'Dinas Olahraga dan Kepemudaan',
            'title2' => 'Provinsi &amp; Banten'
        ];
        $this->load->view('template_branch/header', $data);
        $this->load->view('sign', $data);
        $this->load->view('template_branch/footer', $data);
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
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            // $level = $this->input->post('level');
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => $pass,
                'level_user' => 'pemuda',
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

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {

            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/auth');
        } else {

            $email = htmlspecialchars($this->input->post('email'));
            $pass = htmlspecialchars($this->input->post('password'));
            $cek_login = $this->User_model->cek_login($email);

            if ($cek_login == FALSE) {

                $this->session->set_flashdata('error_login', 'Email yang Anda masukan tidak terdaftar.');
                redirect('sign');
            } else {

                if (password_verify($pass, $cek_login->password)) {
                    $this->session->set_userdata('id_user', $cek_login->id_user);
                    $this->session->set_userdata('nama', $cek_login->nama);
                    $this->session->set_userdata('email', $cek_login->email);
                    $this->session->set_userdata('level_user', $cek_login->level_user);
                    date_default_timezone_set("ASIA/JAKARTA");
                    //$email = $this->session->userdata('email');
                    $data = array('time_login_user' => date('Y-m-d H:i:s'));
                    $this->User_model->logout($data, $email);
                    switch ($cek_login->level_user) {
                        case 'pemuda':
                            echo "pemuda";
                            // redirect(site_url('owner/dashboard'));
                            break;
                        case 'admin':
                            echo "admin";
                            // redirect(site_url('admin/dashboard'));
                            break;
                        case 'pimpinan':
                            echo "pimpinan";
                            // redirect(site_url('terapis/dashboard'));
                            break;
                        case 'operator':
                            echo "operator";
                            // redirect(site_url('terapis/dashboard'));
                            break;
                        default:
                            # code...
                            break;
                    }
                    // redirect('Admin');
                } else {

                    $this->session->set_flashdata('error_login', 'Email atau password yang Anda masukan salah.');
                    redirect('auth');
                }
            }
        }
    }
}
