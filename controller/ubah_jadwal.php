<?php
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $id = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $query = mysqli_query($koneksi, "UPDATE jadwal SET hari = '$hari', start = '$start', end = '$end' WHERE id_jadwal = '$id'");

    if ($query) {
        header('location: ../?page=jadwal&status=2');
    } else {
        header('location: ../?page=jadwal&status=4');
    }
} else {
    header('location: ../403.php');
    exit(0);
}
?>