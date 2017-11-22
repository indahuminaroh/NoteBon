<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$beras = $_POST['id_beras'];
	$minyak = $_POST['id_minyak'];
	$harga = $_POST['total_harga'];
	$status = $_POST['id_status'];
	$telp = $_POST['no_telp'];

$sql = "INSERT INTO orang(nama, alamat, id_beras, id_minyak, total_harga, id_status, no_telp) VALUES ('$nama', '$alamat', '$beras', '$minyak', '$harga', '$status', '$telp')";
$query = mysqli_query($koneksi, $sql);
header("location: index.php");

/*var_dump($query);
	if ($query) {
		echo "Berhasil";
	}else{
		echo "gagal";
		echo mysqli_error($koneksi);
	}*/
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dist/style.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<head>
<body>
	<section>
		<h2><u>Tambah Data</u></h2>
		<div class="col-sm-2">
		<form method="POST">
		<table class="table table-stripped">
			<tr>
				<td><label>Nama:</label></td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td><label>Alamat:</label></td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td><label>Jenis Beras:</label></td>
				<td>
					<select name="id_beras">
						<option value="1">Murni</option>
						<option value="2">Sembako</option>
						<option value="3">Wangi</option>
						<option value="4">Merah</option>
						<option value="5">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Jenis Minyak:</label></td>
				<td>
					<select name="id_minyak">
						<option value="1">Bimoli</option>
						<option value="2">Hemat</option>
						<option value="3">Fortune</option>
						<option value="4">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Hutang</label></td>
				<td><input type="text" name="total_harga"></td>
			</tr>
			<tr>
				<td><label>Status:</label></td>
				<td>
					<select name="id_status">
						<option value="1">Lunas</option>
						<option value="2">Belum Lunas</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>No Telp:</label></td>
				<td><input type="text" name="no_telp"><br/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Simpan" class="btn btn-info"></td>
			</tr>
		</table>
	</form>
</div>
</div>
</section>
<aside>
	<h3><u>Ketentuan dan Syarat Hutang</u></h3>
			<p>
			1. Nama Pelanggan harus jelas.<br/>
			2. Harus meninggalkan alamat rumah dan no_telp.<br/>
			3. Harus membayar hutang.
			</p>
</aside>
</body>
</html>
