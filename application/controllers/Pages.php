<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_get', 'm_get');
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
    $user = $this->session->userdata('id_role');
    $data['page_heading'] = "Dashboard";
    $this->load->view('layout/header');
    $this->load->view('layout/navbar', $data);
    $this->load->view('pages/' . $user . '/dashboard', $data);
    $this->load->view('layout/footer');
  }
  public function kategori()
  {
    if ($this->session->userdata('id_role') == "master") {
      $data['page_heading'] = "Kategori";
      $data['getKategori'] = $this->m_get->getKategori();
      $this->load->view('layout/header');
      $this->load->view('layout/navbar', $data);
      $this->load->view('pages/kategori', $data);
      $this->load->view('layout/footer');
    } else {

      redirect('err/page_403');
    }
  }
  public function barang()
  {
    $data['page_heading'] = "Barang";
    $data['getKategori'] = $this->m_get->getKategori();
    $data['getBarang'] = $this->m_get->getBarang();
    $this->load->view('layout/header');
    $this->load->view('layout/navbar', $data);
    $this->load->view('pages/barang/barang', $data);
    $this->load->view('layout/footer');
  }
  public function tambahBarang()
  {
    $data['page_heading'] = "Tambah Barang";
    $data['getKategori'] = $this->m_get->getKategori();
    $this->load->view('layout/header');
    $this->load->view('layout/navbar', $data);
    $this->load->view('pages/barang/tambahBarang', $data);
    $this->load->view('layout/footer');
  }
  public function editBarang($id_barang)
  {
    $data['page_heading'] = "Edit Barang";
    $data['getKategori'] = $this->m_get->getKategori();
    $data['getBarangId'] = $this->m_get->getBarangId($id_barang);
    $this->load->view('layout/header');
    $this->load->view('layout/navbar', $data);
    $this->load->view('pages/barang/editBarang', $data);
    $this->load->view('layout/footer');
  }
}
