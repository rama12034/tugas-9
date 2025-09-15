<?php
$host = "localhost";
$user = "xirpl1-28"; // sesuaikan user
$pass = "0096763002";     // sesuaikan password
$db   = "db_xirpl1-28_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
