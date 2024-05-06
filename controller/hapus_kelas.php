<?php
include "../config/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = '$id'");

    if ($query) {
        header("location: ../?page=data_kelas&status=3");
    } else {
        header("location: ../?page=data_kelas&status=4");
    }
} else {
    header("location: ../403.php");
    exit(0);
}
?>