<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login User Silab";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['nama' => $nama])->row_array();
        if ($user) {

            if (md5($password, $user['password'])) {
                $data = [
                    'nama' => $user['nama'],
                    'jabatan' => $user['jabatan']
                ];
                $this->session->set_userdata($data);
                if ($user['jabatan'] == 'Kalaboran') {
                    $data_session = array(

                        'nama' => $user['nama'],
                        'jabatan' => $user['jabatan']

                    );
                    $this->session->set_userdata($data_session);
                    redirect('admin');
                } else if ($user['jabatan'] == 'Laboran') {
                    $data_session = array(

                        'nama' => $user['nama'],
                        'jabatan' => $user['jabatan']

                    );
                    $this->session->set_userdata($data_session);
                    redirect('laboran');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak memiliki hak akses</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf! User tidak terdaftar, silahkan hubungi Kalaboran untuk mendapatkan user.</div>');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('jabatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
        redirect('login');
    }
}
