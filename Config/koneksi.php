<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "penggajian";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi GAGAL".mysqli_connect_errno(). "-".mysqli_connect_error());
    exit();
}