, <?php
include 'koneksi.php';

$id_orang = $_GET['id'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $beras = $_POST['id_beras'];
    $minyak = $_POST['id_minyak'];
    $harga = $_POST['total_harga'];
    $status = $_POST['id_status'];
    $telp = $_POST['no_telp'];

$sql = "UPDATE orang SET nama='$nama', alamat='$alamat', id_beras='$beras', id_minyak='$minyak', total_harga='$harga', id_status='$status', no_telp='$telp' WHERE id_orang='$id_orang'";
$query = mysqli_query($koneksi, $sql);
header("location: index.php");
}

$sql = "SELECT nama, alamat, tgl_hutang, id_beras, id_minyak, total_harga, id_status, no_telp FROM orang WHERE id_orang='$id_orang'";
$query = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($query);

/*var_dump($query);
    if ($query) {
        echo "Berhasil";
    }else{
        echo "gagal";
        echo mysqli_error($koneksi);
    }*/
?>

<html>
<head>
<title>Edit Hutang</title>
</head>
<body>

<form method="POST">
    <label>Nama :</label>
    <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"><br><br>

    <label>Alamat :</label>
    <input type="text" name="alamat" value="<?php echo $hasil['alamat'] ?>"><br><br>

    <label>Jenis Beras :</label>
    <select name="id_beras" value="<?php echo $hasil['id_beras'] ?>">
        <option value="1" >Murni</option>
        <option value="2">Sembako</option>
        <option value="3">Wangi</option>
        <option value="4">Merah</option>
        <option value="5">-</option>
    </select><br><br>

    <label>Jenis Minyak :</label>
    <select name="id_minyak" value="<?php echo $hasil['id_minyak'] ?>">
        <option value="1">Bimoli</option>
        <option value="2">Hemat</option>
        <option value="3">Fortune</option>
        <option value="4">-<option>
    </select><br><br>

    <label>Total Hutang  :</label>
    <input name="total_harga" value="<?php echo $hasil['total_harga'] ?>"><br><br>

    <label>Status :</label>
    <select name="id_status" value="<?php echo $hasil['id_status'] ?>">
        <option value="1">Lunas</option>
        <option value="2">Belum Lunas</option>
    </select><br><br>
    <label>No Telp :<label>
        <input type="text" name="no_telp" value="<?php echo $hasil['no_telp'] ?>"><br>

    <input style="margin-left: 300px; margin-top: 30px;" type="submit" name="submit" value="Simpan">    

</body>
</html>
