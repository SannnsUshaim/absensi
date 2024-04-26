<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_absensi";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Failed to connect : ". mysqli_connect_error());
}
?>