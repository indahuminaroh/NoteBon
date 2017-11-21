<?php
include 'koneksi.php';
$sql = "SELECT id_orang, nama, alamat, tgl_hutang, id_beras, id_minyak, total_harga, no_telp FROM orang";
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
</head>
<body>
	<table border="1px">
		<label>Pencatatan Hutang</label><br />
		<a href="input.php">Tambah Data</a>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tgl Hutang</th>
				<th>Jenis Beras</th>
				<th>Jenis Minyak</th>
				<th>Total</th>
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
					<?php echo $data['no_telp'];?>
				</td>
				<td>
					<a href="edit.php?id=<?php echo $data['id_orang'];?>">Edit</a>
					<a href="hapus.php?id=<?php echo $data['id_orang'];?>">Hapus</a>
				</td>
			</tr>
	<?php 
		endforeach;
	?>
	</table>
</body>
</html>
