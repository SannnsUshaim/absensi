<?php
include "../config/koneksi.php";
if (isset($_POST['save'])) {
    $id_jadwal = $_POST['id_jadwal'];
    $id_mapel = $_POST['id_mapel'];
    $id_kelas = $_POST['id_kelas'];

    $query = mysqli_query($koneksi, "INSERT INTO jadwal_absen VALUES ('$id_jadwal', '$id_kelas', '$id_mapel')");

    if ($query) {
        header('location: ../?page=data_jadwal_absen&status=1');
    } else {
        header('location: ../?page=data_jadwal_absen&status=4');
    }
} else {
    header("location: 403.php");
    exit(0);
}
?>