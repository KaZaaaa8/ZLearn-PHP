<?php

include "../../Config/koneksi.php";

$Nama = $_POST['nama'];

$tambah = mysqli_query($koneksi, "INSERT INTO bagian VALUES('', '$Nama')");

if ($tambah === false):
	echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../Jabatan/index.php';</script>";
else :
	echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../Jabatan/index.php';</script>";
endif;

?>