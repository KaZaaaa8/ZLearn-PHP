<?php

include "../../Config/koneksi.php";

$ID = $_POST['id'];
$Nama = $_POST['nama'];

$tambah = mysqli_query($koneksi, "UPDATE bagian set Nama='$Nama' WHERE bagian.ID = '$ID'");

if ($tambah === false):
	echo "<script>alert('Data Gagal Diubah !!');location.href='../Jabatan/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Diubah !!');location.href='../Jabatan/index.php';</script>";
endif;

?>