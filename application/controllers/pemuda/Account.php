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
        if ($this->CI->session->userdata['level_user'] != 'pemuda') {
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
            'pengaturan' => $this->Pengaturan_model->get(),
            'wilayah' => $this->Wilayah_model->get_provinsi(),
            'UserWilayah' => $this->User_model->getWilayah()
        ];
        $this->load->view('template/pemuda/header', $data);
        $this->load->view('template/pemuda/sidebar');
        $this->load->view('pemuda/account', $data);
        $this->load->view('template/pemuda/footer', $data);
    }

    function kabupaten($id_prov)
    {
        $query = $this->db->get_where('kabupaten', array('id_prov' => $id_prov));
        $data = "";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id_kab . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }
    function kecamatan($id_kab)
    {
        $query = $this->db->get_where('kecamatan', array('id_kab' => $id_kab));
        $data = "";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id_kec . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }
    function kelurahan($id_kec)
    {
        $query = $this->db->get_where('kelurahan', array('id_kec' => $id_kec));
        $data = "";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id_kel . "'>" . $value->nama . "</option>";
        }
        echo $data;
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

            redirect(site_url('pemuda/account'));
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
        redirect('pemuda/account');
    }

    function lokasi()
    {
        $data = array(
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'alamat_domisili' => $this->input->post('alamat_domisili'),
            'id_provinsi' => $this->input->post('id_provinsi'),
            'id_kabupaten_kota' => $this->input->post('id_kabupaten_kota'),
            'id_kecamatan' => $this->input->post('id_kecamatan'),
            'id_kelurahan' => $this->input->post('id_kelurahan')
        );
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
        redirect('pemuda/account');
    }
    function socmed()
    {
        $data = array(
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter')
        );
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
        redirect('pemuda/account');
    }
    function Updatepasword()
    {
        $password = $this->input->post('password');
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'password' => $pass
        );
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $this->db->update('tbl_user', $data);
        redirect('sign');
    }
}
