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
<html>
<head>
	<title>NoteBon</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/style.css">
</head>
<body>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-12">
	<h1><u>Pencatatan Hutang</u></h1>
	<table class="table table-striped">
		<a href="input.php" class="btn btn-warning">Tambah Data</a>
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
					<a href="hapus.php?id=<?php echo $data['id_orang'];?>" class="btn btn-danger" onclick="return confirm('Apakan anda yakin ingin menghapus?')">Hapus</a>
				</td>
			</tr>
	<?php 
		endforeach;
	?>
	</table>
	</div>
	</div>
</div>
</body>
</html>
