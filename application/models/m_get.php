<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_get extends CI_Model
{
  public function getKategori()
  {
    return $this->db->get('tb_kategori')->result_array();
  }
  // get kategori ID
  public function getKategoriId($id_kategori)
  {
    return $this->db->get_where('tb_kategori', ['id_kategori' => $id_kategori]);
  }
  // hapus aktegori
  public function hapusKategori($id_kategori)
  {
    return $this->db->delete('tb_kategori', ['id_kategori' => $id_kategori]);
  }
  // hapus barang
  public function hapusBarang($id_barang)
  {
    return $this->db->delete('tb_barang', ['id_barang' => $id_barang]);
  }
  // Get data barang
  public function getBarang()
  {
    return $this->db->get('tb_barang')->result_array();
  }
  // get data barang by Id
  public function getBarangId($id_barang)
  {
    return $this->db->get_where('tb_barang', ['id_barang' => $id_barang])->result_array();
  }
}
