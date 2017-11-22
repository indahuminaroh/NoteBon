<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1;url=index.php">
	<title></title>
</head>
<body>


<?php
include "koneksi.php";

$id_orang = $_GET['id'];

$sql = "DELETE FROM orang WHERE id_orang='$id_orang'";
$hutang = mysqli_query($koneksi, $sql);

if($hutang){
	echo "Dihapus";
}else{
	echo "Tidak Dihapus";
}

?>
</body>
</html>