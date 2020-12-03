<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_input', 'm_input');
    $this->load->model('m_get', 'm_get');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Session
    if (!$this->session->userdata('username')) {
      $this->session->set_flashdata('message', ' <div class="alert alert-warning" role="alert">Login untuk melanjutkan ke halaman selanjutnya
      </div>');
      redirect('');
    }
  }
  // Kelola Produk //
  // Menampilkan tabel produk

  // Tambah barang baru
  public function add_barang()
  {
    if ($this->m_input->addBarang()) {
      $this->session->set_flashdata('message', '<div class="alert alert-success"><b>DATA BERHASIL DISIMPAN!!</b> </div>');
      redirect('pages/tambahBarang');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-dangerr"><b>PENYIMPANAN GAGAL!!</b> </div>');
      redirect('pages/tambahBarang');
    }
  }
  // Edit Produk
  public function edit_barang($id_barang)
  {
    if ($this->m_get->getBarangId($id_barang)) {
      $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
      Data berhasil di hapus!
      </div>');
      redirect('pages/editBarang');
    } else {
      $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
      Proses gagal !!
      </div>');
      redirect('pages/barang');
    }
  }
  // Hapus Produk
  public function hapus_barang($id_barang)
  {
    if ($this->m_get->hapusBarang($id_barang)) {
      $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
      Data berhasil di hapus!
      </div>');
      redirect('pages/barang');
    } else {
      $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
      Proses gagal !!
      </div>');
      redirect('pages/barang');
    }
  }
  // Kelola Kategori//

  // Tambah kategori baru
  public function add_kategori()
  {
    if ($this->m_input->addKategori()) {
      $this->session->set_flashdata('message', '<div class="alert alert-success"><b>DATA BERHASIL DISIMPAN!!</b> </div>');
      redirect('pages/kategori');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-dangerr"><b>PENYIMPANAN GAGAL !!</b> </div>');
      redirect('pages/kategori');
    }
  }
  // edit kategori
  public function edit_kategori()
  {
  }
  // hapus kategori
  public function hapus_kategori($id_kategori)
  {
    if ($this->m_get->hapusKategori($id_kategori)) {
      $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
      Data berhasil di hapus!
      </div>');
      redirect('pages/kategori');
    } else {
      $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
      Proses gagal !!
      </div>');
      redirect('pages/kategori');
    }
  }
}
