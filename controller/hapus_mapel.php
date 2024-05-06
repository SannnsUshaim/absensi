<?php
include "../config/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM mapel WHERE id_mapel = '$id'");

    if ($query) {
        header("location: ../?page=data_mapel&status=3");
    } else {
        header("location: ../?page=data_mapel&status=4");
    }
} else {
    header("location: ../403.php");
    exit(0);
}
?>