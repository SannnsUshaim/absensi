<?php
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $id = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $start = $_POST['start'];
    $end =  $_POST['end'];

    $sql = "INSERT INTO jadwal VALUES ('$id', '$hari', '$start', '$end')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: ../?page=jadwal&status=1');
    } else {
        header('location: ../?page=jadwal&status=4');
    }
} else {
    header('location: ../403.php');
    exit(0);
}

?>