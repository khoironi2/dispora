<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        if ($this->CI->session->userdata['email'] == NULL) {
            redirect();
        }
    }


    public function index()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get()
        ];


        $this->form_validation->set_rules('topik', 'topik', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/pemuda/header', $data);
            $this->load->view('template/pemuda/sidebar');
            $this->load->view('disc/beranda', $data);
            $this->load->view('template/pemuda/footer', $data);
        } else {
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'topik' => $this->input->post('topik'),
                'id_user_diskusi' => $this->session->userdata('id_user'),
                'timestamp' => date('Y-m-d H:i:s')
            ];
            $insert = $this->Beranda_model->insert($data);

            if ($insert) {
                echo "success";
                // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
                // redirect('disc/beranda');
            } else {
                echo "error";
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
                // redirect('disc/beranda');
            }
        }
    }
    function load()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get()
        ];
        $this->load->view('disc/load', $data);
        // echo json_encode($data);
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get(),
            'getID' => $this->Beranda_model->getID($id)
        ];


        $this->form_validation->set_rules('topik', 'topik', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/pemuda/header', $data);
            $this->load->view('template/pemuda/sidebar');
            $this->load->view('disc/edit', $data);
            $this->load->view('template/pemuda/footer', $data);
        } else {
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'topik' => $this->input->post('topik'),
                'id_user_diskusi' => $this->session->userdata('id_user'),
                'timestamp' => date('Y-m-d H:i:s')
            ];
            $id = $this->input->post('id_diskusi');
            $insert = $this->Beranda_model->update($id, $data);

            if ($insert) {
                // echo "success";
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
                redirect('disc/beranda');
            } else {
                // echo "error";
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
                redirect('disc/beranda');
            }
        }
    }

    public function save()
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get(),
        ];
        date_default_timezone_set("ASIA/JAKARTA");
        $data = [
            'topik' => $this->input->post('topik'),
            'id_user_diskusi' => $this->session->userdata('id_user'),
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $id = $this->input->post('id_diskusi');
        $insert = $this->Beranda_model->update($id, $data);

        if ($insert) {
            // echo "success";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
            redirect('disc/beranda');
        } else {
            // echo "error";
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
            redirect('disc/beranda');
        }
    }

    public function delete($id)
    {
        $data['id_diskusi'] = $this->Beranda_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Satus di Hapus!</div>');
        redirect('disc/beranda');
    }

    public function reply1($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get(),
            'getID' => $this->Beranda_model->getID($id),
            'getReply1' => $this->Beranda_model->getReply1($id)
        ];


        $this->form_validation->set_rules('reply_1', 'reply_1', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/pemuda/header', $data);
            $this->load->view('template/pemuda/sidebar');
            $this->load->view('disc/reply1', $data);
            $this->load->view('template/pemuda/footer', $data);
        } else {
            date_default_timezone_set("ASIA/JAKARTA");
            $data = [
                'reply_1' => $this->input->post('reply_1'),
                'id_reply_1_diskusi' => $this->input->post('id_diskusi'),
                'id_user_reply_1_diskusi' => $this->session->userdata('id_user'),
                'timestamp' => date('Y-m-d H:i:s')
            ];
            $insert = $this->Beranda_model->reply1($data);

            if ($insert) {
                echo "success";
                // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success!</div>');
                // redirect('disc/beranda/reply1/' . $id);
            } else {
                echo "error";
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal!</div>');
                // redirect('disc/beranda/reply1/' . $id);
            }
        }
    }
    public function Loadreply1($id)
    {
        $data = [
            'title' => 'Aplikasi Pusat Data Keolahragaan dan Kepemudaan',
            'tab' => 'tab1',
            'page' => 'Forum Diskusi & Komunitas Sosial',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Beranda_model->get(),
            'getID' => $this->Beranda_model->getID($id),
            'getReply1' => $this->Beranda_model->getReply1($id)
        ];

        $this->load->view('disc/loadreply1', $data);
    }
}
