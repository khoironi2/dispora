<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sign extends CI_Controller
{

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'title1' => 'Dinas Olahraga dan Kepemudaan',
            'title2' => 'Provinsi &amp; Banten',
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template_branch/header', $data);
        $this->load->view('sign', $data);
        $this->load->view('template_branch/footer', $data);
    }

    function cekEmail()
    {
        $email = $this->input->post("email");
        $cek = $this->User_model->Cek_Email($email);
        if ($cek > 0) {
            echo "ok";
        }
    }

    public function register()
    {
        $pengaturan = $this->db->get_where('pengaturan', ['id' => 1])->row_array();
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
                'validasi_user' => '1',
                'timestamp' => date('Y-m-d H:i:s')
            ];

            $insert = $this->User_model->register("tbl_user", $data);
            if ($pengaturan['status_notifikasi'] == 1) {
            } else {
                $this->sendEmailTo($email, $nama);
            }
            if ($insert) {
                echo "success";
                // $this->session->set_flashdata('success_login', 'Sukses, Anda telah terdaftar.');
                // redirect('/dispora/sign');
            } else {

                echo "error";
            }
        }
    }

    function sendEmailTo($email,  $nama)
    {
        $pengaturan = $this->db->get_where('pengaturan', ['id' => 1])->row_array();
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $pengaturan['email_smtp'],
            'smtp_pass' => $pengaturan['password_email'],
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $message = "
        <html>
        <head>
            <title>DARIMU BANTEN</title>
        </head>
        <body>
            <h4>USER : , $nama</h4>
            <h4>EMAIL : , $email</h4>
            <p><b>Sudah di Verifikasi !</b></p>
            <p>Silahkan login pada link berikut <a href='https://darimu.garisdesign.com/sign' target='_blank'>LOGIN</a> dan lakukan verivikasi pada menu Manajemen User !</p>
        </body>
        </html>";
        $email_admin = $pengaturan['email_smtp'];

        $kirim = array($email_admin);

        $this->email->from($pengaturan['email_smtp'], 'DARIMU BANTEN');
        $this->email->to($kirim);
        $this->email->subject('PERMINTAAN AKTIVASI USER BARU');
        $this->email->message($message);

        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses!</div>');
            redirect('admin/user');
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
                    $this->session->set_userdata('foto_user', $cek_login->foto_user);
                    $this->session->set_userdata('validasi_user', $cek_login->validasi_user);
                    date_default_timezone_set("ASIA/JAKARTA");
                    //$email = $this->session->userdata('email');
                    $data = array(
                        'status_aktif' => '1',
                        'time_login_user' => date('Y-m-d H:i:s')
                    );
                    $this->User_model->logout($data, $email);
                    if ($cek_login->validasi_user == 1) {
                        echo "invalid";
                    } else {
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
                    }

                    // redirect('Admin');
                } else {

                    $this->session->set_flashdata('error_login', 'Email atau password yang Anda masukan salah.');
                    redirect('auth');
                }
            }
        }
    }

    public function logout()
    {
        date_default_timezone_set("ASIA/JAKARTA");
        $email = $this->session->userdata('email');
        $data = array(
            'status_aktif' => '2',
            'time_logout_user' => date('Y-m-d H:i:s')
        );

        $this->User_model->logout($data, $email);
        $this->session->sess_destroy();
        echo '<script>
            alert("Sukses! Anda berhasil logout."); 
            window.location.href="' . base_url() . '";
            </script>';
    }
}
