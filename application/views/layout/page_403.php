<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title> 403 Page Error </title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">


  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets') ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- page content -->
      <div class="col-md-12">
        <div class="col-middle">
          <div class="text-center text-center">
            <h1 class="error-number">403</h1>
            <h2>Access ditolak</h2>
            <p>Level anda tidak bisa memasuki halaman ini <a href="<?= base_url('auth/logout') ?>">Keluar</a>
            </p>
            <div class="mid_center">
              <h3>Search</h3>
              <form>
                <div class="  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
    </div>
  </div>
  <!-- jQuery -->
  <script src="<?= base_url('assets') ?>/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets') ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('assets') ?>/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url('assets') ?>/vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?= base_url('assets') ?>/build/js/custom.min.js"></script>
  <script src="<?= base_url('assets') ?>/build/js/myjs.js"></script>

</body>

</html>