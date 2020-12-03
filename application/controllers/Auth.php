<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('m_input', 'm_input');
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
    }
    public function index()
    {
        $this->login();
    }
    public function login()
    {
        $this->load->view('layout/header');
        $this->load->view('auth/login');
        $this->load->view('layout/footer');
        // Form Validation
        $this->form_validation->set_rules('username', 'username', 'required');
        if (!$this->form_validation->run()) {
            $data['tittle'] = 'Point Of Sale | Masuk ';
            $this->load->view('layout/header');
            $this->load->view('auth/login');
            $this->load->view('layout/footer');
        } else {
            // panggil fungsi login
            $this->_login();
        }
    }
    private function _login()
    {
        $post = $this->input->post();
        $get_user = $this->db->get_where('tb_user', ['username' => $post['username']])->row_array();
        if ($get_user) {
            $password_verify = password_verify($post['password'], $get_user['password_user']);
            if ($password_verify) {
                // Session
                $data_session = [
                    'username' => $get_user['username'],
                    'nama' => $get_user['nama_user'],
                    'id_role' => $get_user['role']
                ];
                $this->session->set_userdata($data_session);
                $role = $get_user['role'];

                if ($role == 'master') {
                    // Masuk Sebagai Master
                    $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Login sebagai <b>Master</b> Berhasil !!!
                    </div>');
                    redirect('master');
                } else if ($role == 'admin') {
                    // Masuk Sebagai Admin
                    $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Login sebagai <b>Admin</b> Berhasil !!!
                    </div>');
                    redirect('admin');
                } else if ($role == 'kasir') {
                    // Masuk Sebagai Kasir
                    $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Login sebagai <b>Kasir</b> Berhasil !!!
                    </div>');
                    redirect('');
                }
            } else {
                $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Password Salah !!!
                </div>');
            }
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Username tidak terdaftar !!!
            </div>');
        }
    }
    public function logout()
    {
        $data_session = [
            'username', 'nama', 'id_role'
        ];
        $this->session->unset_userdata($data_session);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Anda berhasil keluar !!!
        </div>');
        redirect('');
    }
}
