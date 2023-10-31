<?php

include "../../Config/koneksi.php";

$NIK = $_POST['nik'];
$Tahun = $_POST['tahun'];
$Bulan = $_POST['bulan'];
$GajiBayar = $_POST['gajibayar'];

$tambah = mysqli_query($koneksi, "UPDATE penggajian set NIK_Karyawan='$NIK', Tahun='$Tahun', Bulan='$Bulan', Gaji_Bayar='$GajiBayar' WHERE penggajian.NIK_Karyawan = '$NIK'");

if ($tambah === false):
	echo "<script>alert('Data Gagal Diubah !!');location.href='../Penggajian/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Diubah !!');location.href='../Penggajian/index.php';</script>";
endif;

?>