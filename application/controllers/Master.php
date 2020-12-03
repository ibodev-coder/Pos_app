<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    // $this->load->model('m_input', 'm_input');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Session
    if (!$this->session->userdata('username')) {
      $this->session->set_flashdata('message', ' <div class="alert alert-warning" role="alert">Login untuk melanjutkan ke halaman selanjutnya
      </div>');
      redirect('');
    }
  }
  public function index()
  {

    $this->dashboard();
  }
  public function dashboard()
  {
    $this->load->view('layout/header');
    $this->load->view('layout/navbar');
    $this->load->view('pages/master/dashboard');
    $this->load->view('layout/footer');
  }
}
