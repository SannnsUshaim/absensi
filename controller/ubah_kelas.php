<?php
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $id = $_POST['id_kelas'];
    $grade = $_POST['grade'];
    $major = $_POST['major'];
    $kode = $_POST['kode'];

    $query = mysqli_query($koneksi, "UPDATE kelas SET grade = '$grade', major = '$major', kode = '$kode' WHERE id_kelas = '$id'");
    if ($query) {
        header("location: ../?page=data_kelas&status=2");
    } else {
        header("location: ../?page=data_kelas&status=4");
    }
} else {
    header("location: ../403.php");
    exit(0);
}
?>