<?php
include 'koneksi.php';
$sql = "SELECT id_jenis, nama_orang, alamat, tgl_hutang, id_jenis, harga, no_telp FROM orang";
$query = mysqli_query($koneksi, $sql);

function jenis($idJenis, $koneksi){
	$sql = "SELECT jenis_barang FROM barang WHERE jenis_barang=$idJenis";
	$query = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_assoc($query);
	return $data['jenis_barang'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>NoteBon</title>
</head>
<body>
	<table border="1px">
		<label>Pencatatan Hutang</label><br />
		<a href="input.php">Tambah Data</a>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tgl Hutang</th>
				<th>Jenis</th>
				<th>Harga</th>
				<th>No Telp</th>
				<th>Aksi</th>
			</tr>
	<?php 
		foreach ($query as $data):
	?>
			<tr>
				<td>
					<?php echo $data['nama_orang'];?>
				</td>
				<td>
					<?php echo $data['alamat'];?>
				</td>
				<td>
					<?php echo $data['tgl_hutang'];?>
				</td>
				<td>
					<?php echo jenis($data['id_jenis'],$koneksi);?>
				</td>
				<td>
					<?php echo $data['harga'];?>
				</td>
				<td>
					<?php echo $data['no_telp'];?>
				</td>
				<td>
					<a href="edit.php?id=<?php echo $data['id_barang'];?>">Edit</a>
					<a href="hapus.php?id=<?php echo $data['id_barang'];?>">Hapus</a>
				</td>
			</tr>
	<?php 
		endforeach;
	?>
	</table>
</body>
</html>