<div class="row">
  <div class="col-md-5 col-sm-6 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Kategori Baru</h2>
        <div class="clearfix"></div>
        <small>Klik <a href=""> <b>IMPORT</b></a> untuk menambahkan data secara banyak</small>
      </div>
      <div class="x_content">
        <form class="" action="<?= base_url('proses/add_kategori') ?>" method="post">
          <span class="section">Form</span>
          <div class="message"> <?= $this->session->flashdata('message'); ?></div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kategori</label>
            <div class="col-md-6 col-sm-6">
              <input class="form-control" name="nama_kategori">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Keterangan</label>
            <div class="col-md-6 col-sm-6">
              <input class="form-control" name="keterangan">
            </div>
          </div>
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

  <div class="col-md-7 col-sm-6 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Kategori</h2>

        <div class="clearfix"></div>
      </div>
      <a href="#" class="btn btn-success btn-sm"><i class="fa fa-fax pr-2"></i>Xls</a>
      <a href="#" class="btn btn-outline-danger btn-sm"><i class="fa fa-file-pdf-o pr-2"></i>Pdf</a>
      <a href="#" class="btn btn-outline-dark btn-sm"><i class="fa fa-print pr-2"></i>Print</a>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">

              </p>
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Tanggal Update</th>
                    <th>Keterangan</th>
                    <th>Perintah</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $no = 1;
                  foreach ($getKategori as $r) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $r['id_kategori'] ?></td>
                      <td><?= $r['nama_kategori'] ?></td>
                      <td><?= $r['tanggal_update'] ?></td>
                      <td><?= $r['keterangan'] ?></td>
                      <td><a href="#"><i class="fa fa-edit "></i>Ubah</a>
                        <a href="<?= base_url('proses/hapus_kategori/' . $r['id_kategori']) ?>"><i class="fa fa-trash "></i>Hapus</a></td>
                    </tr>
                  <?php
                    $no++;
                  endforeach;
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>