<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['nama' =>
        $this->session->userdata('nama')])->row_array();
        $data['title'] = "Sistem Informasi Laboraturium (Silab)";
        $data['meta'] = "ini adalah produk untuk Latihan HTML";
        $data['content'] = 'user_view/home';
        $this->load->view('user_view/template', $data);
    }
    function input_profile()
    {
        $data['title'] = "Input User";
        $data['meta'] = "User Baru";
        $data['content'] = '';
        //$data['sidebar']='sidebar';
        //mengambil data agaa untuk dipilihan agama
        $data['kategoriuser'] = $this->back_model->get_tb_kategoriuser();
        $data['agama'] = $this->back_model->get_tb_agama();
        $data['golongan'] = $this->back_model->get_tb_golongan();
        $data['jabatan'] = $this->back_model->get_tb_jabatan();
        $this->load->view('back_template', $data);
    }
}
