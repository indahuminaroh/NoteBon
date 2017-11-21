<?php

include "koneksi.php";

$jenis_barang = $_GET['jenis_barang'];

$sql =  "DELETE FROM barang WHERE $jenis_barang='jenis_barang'";

$hutang = mysqli_query($jenis_barang, $sql);

?>
