<?php
include 'koneksi.php';
$sql = "SELECT id_orang, nama, alamat, tgl_hutang, id_beras, id_minyak, total_harga, id_status, no_telp FROM orang";
$query = mysqli_query($koneksi, $sql);

function beras($idBeras, $koneksi){
  $sql = "SELECT jenis_beras FROM beras WHERE id_beras=$idBeras";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jenis_beras'];
}
function minyak($idMinyak, $koneksi){
  $sql = "SELECT jenis_minyak FROM minyak WHERE id_minyak=$idMinyak";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['jenis_minyak'];
}
function status($idStatus, $koneksi){
  $sql = "SELECT status FROM status WHERE id_status=$idStatus";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
  return $data['status'];
}
/*var_dump($query);
if ($query) {
    echo "berhasi;";
  }else {
    echo "gagal";
    echo mysqli_error($koneksi);
  }*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ssfavicon.ico">

    <title>CRUD Sederhana</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/style.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistem Administrasi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Daftar Harga</a></li>
            <li class="active"><a href="index.php">Daftar Hutang</a></li>
            <li><a href="#">Daftar Pelanggan</a></li>
            <li><a href="keluar.php">Log Out</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <!--<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Dashboard<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#.php">Daftar Harga</a></li>
            <li><a href="#.php">Daftar Pelanggan</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>-->
        <div class="container-fluid">
        <div class="col-sm-12">
          <!--<h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>-->

          <h2 class="sub-header">Daftar Hutang</h2>
          <div class="table-responsive">
            <a href="input.php" class="btn btn-info">Tambah Data</a>
            <table class="table table-striped">
              <thead>
                <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tgl Hutang</th>
        <th>Jenis Beras</th>
        <th>Jenis Minyak</th>
        <th>Total</th>
        <th>Status</th>
        <th>No Telp</th>
        <th>Aksi</th>
      </tr>
              </thead>
              <tbody>
                <?php 
    foreach ($query as $data):
  ?>
      <tr>
        <td>
          <?php echo $data['nama'];?>
        </td>
        <td>
          <?php echo $data['alamat'];?>
        </td>
        <td>
          <?php echo $data['tgl_hutang'];?>
        </td>
        <td>
          <?php echo beras($data['id_beras'],$koneksi);?>
        </td>
        <td>
          <?php echo minyak($data['id_minyak'],$koneksi);?>
        </td>
        <td>
          <?php echo $data['total_harga'];?>
        </td>
        <td>
          <?php echo status($data['id_status'],$koneksi);?>
        </td>
        <td>
          <?php echo $data['no_telp'];?>
        </td>
        <td>
          <a href="edit.php?id=<?php echo $data['id_orang'];?>" class="btn btn-success">Edit</a>
          <a href="hapus.php?id=<?php echo $data['id_orang'];?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
        </td>
      </tr>
  <?php 
    endforeach;
  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

