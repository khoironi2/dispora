<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
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
            'page' => 'Pengaturan Tampilan',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get()
        ];
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar');
        $this->load->view('admin/pengaturan', $data);
        $this->load->view('template/admin/footer', $data);
    }
    function updatewarna()
    {
        $data = array(
            'warna_utama' => $this->input->post('warna_utama'),
            'warna_sidebar' => $this->input->post('warna_sidebar')
        );
        $id = '1';
        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data);
        redirect('admin/pengaturan');
    }

    public function updateLogo()
    {
        $query = $this->db->get('pengaturan')->row_array();
        $old = $query["logo_aplikasi"];
        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/img/logo/';
        $config['allowed_types']     = 'jpg|png|svg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('logo_aplikasi')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/img/logo//' . $old);

            $upload_data = array('uploads' => $this->upload->data());

            $data = array('logo_aplikasi' => $upload_data['uploads']['file_name']);

            $id = '1';

            $this->Pengaturan_model->update($id, $data);

            redirect(site_url('admin/pengaturan'));
        }
    }

    public function updateFlyer()
    {
        $query = $this->db->get('pengaturan')->row_array();
        $old = $query["flyer_branch"];
        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/img/logo/';
        $config['allowed_types']     = 'jpg|png|svg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('flyer_branch')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/img/logo//' . $old);

            $upload_data = array('uploads' => $this->upload->data());

            $data = array('flyer_branch' => $upload_data['uploads']['file_name']);

            $id = '1';

            $this->Pengaturan_model->update($id, $data);

            redirect(site_url('admin/pengaturan'));
        }
    }

    function updateutama()
    {
        $data = array(
            'nama_aplikasi' => $this->input->post('nama_aplikasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_provinsi' => $this->input->post('nama_provinsi')
        );
        $id = '1';
        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data);
        redirect('admin/pengaturan');
    }
    function updateFooter()
    {
        $data = array(
            'nama_footer' => $this->input->post('nama_footer')
        );
        $id = '1';
        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data);
        redirect('admin/pengaturan');
    }

    function updateCardBranch()
    {
        $data = array(
            'deskripsi_card_branch_1' => $this->input->post('deskripsi_card_branch_1'),
            'deskripsi_card_branch_2' => $this->input->post('deskripsi_card_branch_2')
        );
        $id = '1';
        $this->db->where('id', $id);
        $this->db->update('pengaturan', $data);
        redirect('admin/pengaturan');
    }
}
