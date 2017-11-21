<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$beras = $_POST['id_beras'];
	$minyak = $_POST['id_minyak'];
	$harga = $_POST['id_status'];
	$telp = $_POST['no_telp'];

$sql = "INSERT INTO orang(nama, alamat, id_beras, id_minyak, id_status, no_telp) VALUES ('$nama', '$alamat', '$beras', '$minyak', '$harga', '$telp')";
$query = mysqli_query($koneksi, $sql);

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
<head>
<body>
	<form method="POST">
		<table>
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
				<td><label>Harga:</label></td>
				<td>
					<select name="id_status">
						<option value="Lunas">Lunas</option>
						<option value="Belum Lunas">Belum Lunas</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>No Telp:</label></td>
				<td><input type="text" name="no_telp"><br/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
