<?php

include "../../Config/koneksi.php";

$NIK = $_POST['nik'];
$Tahun = $_POST['tahun'];
$Bulan = $_POST['bulan'];
$GajiBayar = $_POST['gajibayar'];

$tambah = mysqli_query($koneksi, "INSERT INTO penggajian VALUES('', '$NIK', '$Tahun', '$Bulan', '$GajiBayar')");

if ($tambah === false):
	echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../Penggajian/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../Penggajian/index.php';</script>";
endif;

?>