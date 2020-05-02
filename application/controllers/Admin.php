<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['nama' =>
        $this->session->userdata('nama')])->row_array();
        $data['title'] = "Sistem Informasi Laboraturium (Silab)";
        $data['meta'] = "ini adalah produk untuk Latihan HTML";
        $data['content'] = 'admin_view/home';
        $this->load->view('admin_view/template', $data);
    }

    function input_user($page = 0)
    {
        $data['title'] = "Input User";
        $data['meta'] = "User Baru";
        $data['content'] = 'admin_view/input_user';
        //daftar golongan user undiksha
        $config['total_rows'] = $this->admin_model->get_num_rows('tb_user');
        $config['per_page'] = 3;
        $config['base_url'] = site_url('Admin/input_user');
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['user'] = $this->admin_model->get_user($config['per_page'], $page);
        $this->pagination->initialize($config);
        $this->load->view('admin_view/template', $data);
    }
    function update_user($id_user)
    {
        $data['title'] = "Input User";
        $data['meta'] = "User Baru";
        $data['content'] = 'admin_view/input_user';
        $this->db->where('md5(id_user)', $id_user);
        $data['users'] = $this->db->get('tb_user')->row_array();
        //daftar golongan user undiksha
        $config['base_url'] = site_url('Admin/input_user');
        $data['user'] = $this->admin_model->get_user();
        // $this->pagination->initialize($config);
        $this->load->view('admin_view/template', $data);
    }


    function delete_user($id_user)
    {
        $where = array('md5(id_user)' => $id_user);
        $this->admin_model->delete_user($where, 'tb_user');
        redirect('admin/input_user');
    }
    function save_user()
    {
        //mengirim post ke model
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[100]');
        if ($this->form_validation->run() == FALSE) {
            $this->input_user();
        } else {
            if ($_POST['id_user'] != '') {
                //exit();
                $this->admin_model->save_update_user($_POST);
            } else {
                $this->admin_model->save_user($_POST);
            }
            //akses fungsi untuk menampilkan halaman daftar user
            redirect('Admin/input_user');
        }
    }

    function input_lokasi()
    {
        $data['title'] = "Input lokasi";
        $data['meta'] = "Registrasi lokasi Baru";
        $data['content'] = 'admin_view/input_lokasi';
        $data['prodi'] = $this->admin_model->get_tb_prodi();
        $this->load->view('admin_view/template', $data);
    }
    function update_lokasi($id_lokasi)
    {
        $data['title'] = "Input lokasi";
        $data['meta'] = "Registrasi lokasi Baru";
        $data['content'] = 'admin_view/input_lokasi';
        $this->db->where('md5(id_lokasi)', $id_lokasi);
        $data['lokasi'] = $this->db->get('tb_lokasi')->row_array();
        $data['prodi'] = $this->admin_model->get_tb_prodi();
        $this->load->view('admin_view/template', $data);
    }
    function delete_lokasi($id_lokasi)
    {
        $where = array('md5(id_lokasi)' => $id_lokasi);
        $this->admin_model->delete_lokasi($where, 'tb_lokasi');
        redirect('Admin/data_lokasi');
    }
    function data_lokasi($page = 0)
    {
        $data['title'] = "daftar lokasi";
        $data['meta'] = "daftar lokasi";
        $config['total_rows'] = $this->admin_model->get_num_rows('tb_lokasi');
        $config['per_page'] = 5;
        $config['base_url'] = site_url('Admin/data_lokasi');
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['lokasi'] = $this->admin_model->get_lokasi($config['per_page'], $page);
        $this->pagination->initialize($config);
        $data['content'] = 'admin_view/data_lokasi';
        $this->load->view('admin_view/template', $data);
    }


    function save_lokasi()
    {
        //mengirim post ke model
        $this->form_validation->set_rules('nama_lab', 'Nama Lab', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->input_lokasi();
        } else {
            if ($_POST['id_lokasi'] != '') {
                $this->admin_model->save_update_lokasi($_POST);
            } else {
                $this->admin_model->save_lokasi($_POST);
            }
            //akses fungsi untuk menampilkan halaman daftar peserta
            redirect('Admin/data_lokasi');
        }
    }

    function input_aset()
    {
        $data['title'] = "Input Aset";
        $data['meta'] = "Registrasi aset Baru";
        $data['content'] = 'admin_view/input_aset';
        $data['lokasi'] = $this->admin_model->get_tb_lokasi();
        $this->load->view('admin_view/template', $data);
    }
    function update_aset($kode_aset)
    {
        $data['title'] = "Update Aset";
        $data['meta'] = "Registrasi aset Baru";
        $data['content'] = 'admin_view/input_aset';
        $this->db->where('md5(kode_aset)', $kode_aset);
        $data['aset'] = $this->db->get('tb_aset')->row_array();
        $data['lokasi'] = $this->admin_model->get_tb_lokasi();
        $this->load->view('admin_view/template', $data);
    }
    function delete_aset($kode_aset)
    {
        $where = array('md5(kode_aset)' => $kode_aset);
        $this->admin_model->delete_aset($where, 'tb_aset');
        redirect('Admin/data_aset');
    }
    function save_aset()
    {
        //mengirim post ke model
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->input_aset();
        } else {
            if ($_POST['kode_aset'] != '') {
                $this->admin_model->save_update_aset($_POST);
            } else {
                $this->admin_model->save_aset($_POST);
            }
            //akses fungsi untuk menampilkan halaman daftar peserta
            redirect('Admin/data_aset');
        }
    }
    function data_aset($page = 0)
    {
        $data['title'] = "daftar aset";
        $data['meta'] = "daftar aset";
        $config['total_rows'] = $this->admin_model->get_num_rows('tb_aset');
        $config['per_page'] = 5;
        $config['base_url'] = site_url('Admin/data_aset');
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-left"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['aset'] = $this->admin_model->get_aset($config['per_page'], $page);
        $this->pagination->initialize($config);
        $data['content'] = 'admin_view/data_aset';
        $this->load->view('admin_view/template', $data);
    }
}
