<?php

include "../Config/koneksi.php";

$ID = $_GET['ID'];
$hapus = mysqli_query($koneksi, "DELETE FROM penggajian WHERE ID = '$ID'");

if ($hapus === false):
	echo "<script>alert('Data Gagal Dihapus !!');location.href='../Page/Penggajian/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Dihapus !!');location.href='../Page/Penggajian/index.php';</script>";
endif;

?>