<?php
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
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="dist/style.css">
</head>
<body>
<section>
    <h2><u>Edit Data</u></h2>
    <div class="col-sm-2">
<form method="POST">
    <table class="table table-stripped">
        <tr>
            <td><label>Nama :</label></td>
            <td><input type="text" name="nama" value="<?php echo $hasil['nama'] ?>" required/></td>
        </tr>
        <tr>
            <td><label>Alamat :</label></td>
            <td><input type="text" name="alamat" value="<?php echo $hasil['alamat'] ?>" required/></td>
        </tr>
        <tr>
            <td><label>Jenis Beras :</label></td>
            <td><select name="id_beras" value="<?php echo $hasil['id_beras'] ?>">
                    <option value="1" >Murni</option>
                    <option value="2">Sembako</option>
                    <option value="3">Wangi</option>
                    <option value="4">Merah</option>
                    <option value="5">-</option>
            </select></td>
        </tr>
        <tr>
            <td><label>Jenis Minyak :</label></td>
            <td><select name="id_minyak" value="<?php echo $hasil['id_minyak'] ?>">
                    <option value="1">Bimoli</option>
                    <option value="2">Hemat</option>
                    <option value="3">Fortune</option>
                    <option value="4">-</option>
            </select></td>
        </tr>
        <tr>
            <td><label>Total Hutang  :</label></td>
            <td><input name="total_harga" value="<?php echo $hasil['total_harga'] ?>" required/></td>
        </tr>
        <tr>
            <td><label>Status :</label></td>
            <td><select name="id_status" value="<?php echo $hasil['id_status'] ?>">
                    <option value="1">Lunas</option>
                    <option value="2">Belum Lunas</option>
                </select></td>
        </tr>
            <td><label>No Telp :</label></td>
            <td><input type="text" name="no_telp" value="<?php echo $hasil['no_telp'] ?>" required/></td>
        </tr>
        <tr>
            <td colspan="2"><input class="btn btn-primary" style="margin-left: 300px; margin-top: 30px;" type="submit" name="submit" value="Simpan"></td>
        </tr>    
</table>
</form>
</div>
</section>
<aside>
    <h3><u>Ketentuan dan Syarat Hutang</u></h3>
            
            <p>1. Nama Pelanggan harus jelas.</p>
            <p>2. Harus meninggalkan alamat rumah dan no_telp.</p>
            <p>3. Harus membayar hutang.</p>
</aside>
</body>
</html>
