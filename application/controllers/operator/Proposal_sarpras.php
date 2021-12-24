<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proposal_sarpras extends CI_Controller
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
            'page' => 'Data Proposal Kegiatan, Sarpras dan Kewirausahaan Pemuda',
            'user' => $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array(),
            'pengaturan' => $this->Pengaturan_model->get(),
            'get' => $this->Proposal_sarpras_model->get()
        ];
        $this->load->view('template/operator/header', $data);
        $this->load->view('template/operator/sidebar');
        $this->load->view('operator/proposal_sarpras', $data);
        $this->load->view('template/operator/footer', $data);
    }

    public function save()
    {
        // $query = $this->db->get_where('tbl_proposal_sarpras', ['id_proposal_sarpras' => $id])->row_array();
        // $old = $query["file_proposal"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/proposal/';
        $config['allowed_types']     = 'jpg|png|svg|pdf|doc|csv|jpeg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('file_proposal')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            // unlink(FCPATH . 'assets/proposal//' . $old);

            $upload_data = array('uploads' => $this->upload->data());
            date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                'judul_proposal' => $this->input->post('judul_proposal'),
                'id_pengusul' => $this->session->userdata('id_user'),
                'periode' => $this->input->post('periode'),
                'timestamp' => date('Y-m-d H:i:s'),
                'file_proposal' => $upload_data['uploads']['file_name']
            );

            // $id = $this->session->userdata('id_user');

            $insert = $this->Proposal_sarpras_model->insert('tbl_proposal_sarpras', $data);

            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
                redirect('operator/proposal_sarpras');
            } else {

                echo "error";
            }
        }
    }

    public function update()
    {
        $id = $this->input->post('id_proposal_sarpras');
        $query = $this->db->get_where('tbl_proposal_sarpras', ['id_proposal_sarpras' => $id])->row_array();
        $old = $query["file_proposal"];

        //CONFIGURASI UPLOAD IMAGE
        $config['upload_path']         = './assets/proposal/';
        $config['allowed_types']     = 'jpg|png|svg|pdf|doc|csv|jpeg';
        $config['max_size']         = '12000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        //PROSES UPLOAD IMAGE
        if (!$this->upload->do_upload('file_proposal')) {
            $data['errors']     = $this->upload->display_errors();
            print_r($data);
        } else {
            unlink(FCPATH . 'assets/proposal//' . $old);

            $upload_data = array('uploads' => $this->upload->data());
            date_default_timezone_set("ASIA/JAKARTA");
            $data = array(
                'judul_proposal' => $this->input->post('judul_proposal'),
                'id_pengusul' => $this->session->userdata('id_user'),
                'periode' => $this->input->post('periode'),
                'timestamp' => date('Y-m-d H:i:s'),
                'file_proposal' => $upload_data['uploads']['file_name']
            );


            $insert = $this->Proposal_sarpras_model->update($id, $data);

            if ($insert) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, Data berhasil di tambahgkan!</div>');
                redirect('operator/proposal_sarpras');
            } else {

                echo "error";
            }
        }
    }


    public function delete($id)
    {

        $data = [
            'proposal' => $this->db->get_where('tbl_proposal_sarpras', ['id_proposal_sarpras' => $id])->row_array(),
        ];

        $old_image = $data["proposal"]["file_proposal"];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/proposal/' . $old_image);
        }
        $this->db->delete('tbl_proposal_sarpras', ['id_proposal_sarpras' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, Data berhasil di Hapus!</div>');
        redirect('operator/proposal_sarpras');
    }
}
