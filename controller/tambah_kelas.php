<?php 
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $id = $_POST['id_kelas'];
    $grade = $_POST['grade'];
    $major = $_POST['major'];
    $kode = $_POST['kode'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas VALUES ('$id', '$grade', '$major', '$kode')");

    if ($query) {
        header("location: ../?page=data_kelas&status=1");
    } else {
        header("location: ../?page=data_kelas&status=4");
    }
} else {
    header("location: ../403.php");
    exit(0);
}
?>