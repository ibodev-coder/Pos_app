<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit data barang</h2>
        <div class="clearfix"></div>
        <small>Klik <a href=""> <b>IMPORT</b></a> untuk menambahkan data secara banyak</small>
      </div>
      <div class="x_content">
        <a href="javascript:window.history.go(-1);"><b> <i class="fa fa-arrow-left"></i> Kembali</b></a>
        <form class="" action="<?= base_url('proses/edit_barang') ?>" method="post" enctype="multipart/form-data">
          <span class="section">Form data barang</span>
          <div class="message"> <?= $this->session->flashdata('message'); ?></div>
          <?php foreach ($getBarangId as $r) : ?>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Nama barang</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="nama_barang" value="<?= $r['nama_barang'] ?>">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Merk Barang</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="merk_barang">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori </label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="kategori_barang">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Harga </label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="harga">
              </div>
            </div>
            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Upload Gambar</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="file" name="img_barang">
              </div>
            </div>


            <div class="field item form-group">
              <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" name="keterangan" value="<?= $r['keterangan'] ?>">
              </div>
            </div>
          <?php endforeach; ?>
          <small>Stok secara default(0),untuk menambahkan stok barang silahkan Klik <a href=""><b>stok</b></a></small>

          <div class="ln_solid">
            <div class="form-group">
              <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Simpan</button>
                <button type='reset' class="btn btn-success">Reset</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>