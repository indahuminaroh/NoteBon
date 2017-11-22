<?php

include "koneksi.php";

$id_orang = $_GET['id'];

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_hutang = $_POST['tgl_hutang'];
    $id_beras = $_POST['id_beras'];
    $id_minyak = $_POST['id_minyak'];
    $id_status = $_POST['id_status'];
    $no_telp = $_POST['no_telp'];

    $sql = "UPDATE orang SET nama='$nama', alamat='$alamat', tgl_hutang='$tgl_hutang', id_beras='$id_beras', id_status='$id_status', no_telp='$no_telp' WHERE id_orang='$id_orang'";

    $hasil = mysqli_query($koneksi, $sql);

    if($hasil){
    echo "Berhasil Diupdate";
    }else{
    echo "Gagal Diupdate";
    }
}

$sql = "SELECT nama, alamat, tgl_hutang, id_beras, id_status, no_telp FROM orang WHERE id_orang='$id_orang'";

$data = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($data);
?>

<html>
<head>
<title>Edit Hutang</title>
</head>
<body>

<form method="POST">
    <label>Nama :</label><b>
    <input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"><br><br>

    <label>Alamat :</label>
    <textarea name="alamat" value="<?php echo $hasil['alamat'] ?>"></textarea><br><br>

    <label>Tanggal Hutang  :</label>
    <input type="date("Y-m-d")" name="tgl_hutang" value="<?php echo $hasil['tgl_hutang'].date("h:i:s") ?>"><br><br>

    <label>Jenis Beras</label>
    <select name="id_beras" value="<?php echo $hasil['id_orang'] ?>">
        <option value="1" >Murni</option>
        <option value="2">Sembako</option>
        <option value="3">Wangi</option>
        <option value="4">Merah</option>
        <option value="5">-</option>
    </select><br><br>

    <label>Jenis Minyak</label>
    <select name="id_minyak" value="<?php echo $hasil['id_minyak'] ?>">
        <option value="1">Bimoli</option>
        <option value="2">Hemat</option>
        <option value="3">Fortune</option>
        <option value="4">-<option>
    </select><br><br>

    <label>Status :</label>
    <select name="id_status" value="<?php echo $hasil['id_status'] ?>">
        <option value="Lunas">  Lunas</option>
        <option value="Belum Lunas">Belum Lunas</option>
    </select><br><br>
    <label>No Telp :<label>
        <input type="text" name="no_telp" value="<?php echo $hasil['no_telp'] ?>"><br>

    <input style="margin-left: 300px; margin-top: 30px;" type="submit" name="submit" value="Simpan">    

</body>
</html>

