<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_input extends CI_Model
{
  public function addKategori()
  {
    $post = $this->input->post();
    $data = ['nama_kategori' => $post['nama_kategori'], 'tanggal_update' => date('Y-m-d '), 'keterangan' => $post['keterangan']];
    return $this->db->insert('tb_kategori', $data);
  }
  // Tambah Barang
  public function addBarang()
  {
    $post = $this->input->post();
    $data = [
      'nama_barang' => $post['nama_barang'],
      'id_merk' => 2, 'id_kategori' => 2,
      'harga_barang' => $post['harga'],
      'img_barang' => $this->_uploadImgbrg(),
      'status' => 0,
      'keterangan' => $post['keterangan'],
      'tanggal_update' => date('Y-m-d ')
    ];
    return $this->db->insert('tb_barang', $data);
  }
  private function _uploadImgBrg()
  {
    $data['upload_path']          = './assets/produk_img/';
    $data['allowed_types']        = 'gif|jpg|png';

    $data['overwrite']            = true;
    $data['max_size']             = 1024; // 1MB


    $this->load->library('upload', $data);

    if ($this->upload->do_upload('img_barang')) {
      return $this->upload->data("file_name");
    }

    return "default.png";
  }
}
