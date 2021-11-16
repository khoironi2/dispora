<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
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
            'page' => 'Dashboard',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar');
        $this->load->view('admin/account', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function updateAva()
    {
        $query = $this->db->get_where('tbl_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $old = $query["foto_user"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/img/account/';
        $config['allowed_types']     = 'jpg|png|svg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('foto_user')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/img/account//' . $old);

            $upload_data = array('uploads' => $this->upload->data());

            $data = array(
                'foto_user' => $upload_data['uploads']['file_name']
            );

            $id = $this->session->userdata('id_user');

            $this->User_model->update($id, $data);

            redirect(site_url('admin/account'));
        }
    }

    function update1()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'institusi_asal' => $this->input->post('institusi_asal'),
            'telpon' => $this->input->post('telpon'),
            'email' => $this->input->post('email'),
        );
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
        redirect('admin/account');
    }
}
