<div class="row">


  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Barang</h2>

        <div class="clearfix"></div>
      </div>
      <a href="<?= base_url('pages/tambahBarang') ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus pr-2"></i>Tambah Barang</a>
      <a href="#" class="btn btn-success btn-sm"><i class="fa fa-fax pr-2"></i>Xls</a>
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
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Merk Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>

                    <th>Stok</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Tanggal Update</th>
                    <th>Perintah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($getBarang as $r) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $r['id_barang'] ?></td>
                      <td><?= $r['nama_barang'] ?></td>
                      <td><?= $r['id_merk'] ?></td>
                      <td><?= $r['id_kategori'] ?></td>
                      <td><?= $r['harga_barang'] ?></td>
                      <td><?= $r['stok'] ?></td>
                      <td><?php if ($r['status'] == 0) : ?>
                          <span class="badge badge-danger">Stok kosong</span>
                        <?php elseif ($r['status'] == 1) : ?>
                          <span class="badge badge-warning">Dalam perjalanan</span>
                        <?php else : ?>
                          <span class="badge badge-success">Tersedia</span>

                        <?php endif; ?>

                      </td>

                      <td><?= $r['keterangan'] ?></td>
                      <td><?= $r['tanggal_update'] ?></td>
                      <td><a href="<?= base_url('pages/editBarang/' . $r['id_barang']) ?>"><i class="fa fa-edit "></i>Ubah</a>
                        <a href="#"><i class="fa fa-eye "></i>Lihat</a>
                        <a href="<?= base_url('proses/hapus_barang/' . $r['id_barang']) ?>"><i class="fa fa-trash "></i>Hapus</a></td>
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