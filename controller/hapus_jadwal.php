<?php
include "../config/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id_jadwal = '$id'");

    if ($query) {
        header('location: ../?page=jadwal&status=3');
    } else {
        header('location: ../?page=jadwal&status=4');
    }
} else {
    header('location: ../403.php');
    exit(0);
}
?>