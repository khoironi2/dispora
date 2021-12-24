<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->cek_status();
        $this->CI = &get_instance();
        // $this->load->library('session');
        if ($this->CI->session->userdata['level_user'] != 'admin') {
            redirect();
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Manajemen Akses User',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'usernotadmin' => $this->User_model->getnotAdmin(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('template/admin/footer', $data);
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


    public function validasi($id)
    {
        $user = $this->db->get_where('tbl_user', ['id_user' => $id])->row_array();
        $nama = $user['nama'];
        $id_user = $user['id_user'];
        $email = $user['email'];
        $data = [
            'validasi_user' => '2',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $update = $this->User_model->update($id, $data);
        $this->sendEmailTo($email, $id_user, $nama);
        if ($update) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, User ' . $nama . ' dengan ID: ' . $id_user . ' berhasil di verivikasi !</div>');
            redirect('admin/user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed !</div>');
            redirect('admin/user');
        }
    }

    public function unvalidasi($id)
    {
        $user = $this->db->get_where('tbl_user', ['id_user' => $id])->row_array();
        $nama = $user['nama'];
        $id_user = $user['id_user'];
        $data = [
            'validasi_user' => '1',
            'timestamp' => date('Y-m-d H:i:s')
        ];

        $update = $this->User_model->update($id, $data);
        if ($update) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Sukses, User ' . $nama . ' dengan ID: ' . $id_user . ' berhasil di Unverivikasi !</div>');
            redirect('admin/user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed !</div>');
            redirect('admin/user');
        }
    }

    function sendEmailTo($email, $id_user,  $nama)
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'akbarainovationcenter@gmail.com',
            'smtp_pass' => 'betaancor',
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
            <h4>ID : , $id_user</h4>
            <h4>EMAIL : , $email</h4>
            <p><b>Sudah di Verifikasi !</b></p>
            <p>Silahkan login pada link berikut <a href='https://darimu.garisdesign.com/sign' target='_blank'>LOGIN</a> !</p>
        </body>
        </html>";
        // $email_backup = 'dev.akbarainovationcenter@gmail.com';
        while (true) {
            $kirim = array($email);
        }
        $this->email->from('akbarainovationcenter@gmail.com', 'DARIMU BANTEN');
        $this->email->to($kirim);
        $this->email->subject('PERMINTAAN AKTIVASI BARU DITERIMA');
        $this->email->message($message);

        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Sukses!</div>');
            redirect('admin/user');
        }
    }


    public function delete($id)
    {
        $data['id_user'] = $this->User_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('admin/user');
    }
}
