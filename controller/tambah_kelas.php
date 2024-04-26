<?php 
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $id = $_POST['id_kelas'];
    $grade = $_POST['grade'];
    $major = $_POST['major'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas VALUES ('$id', '$grade', '$major')");

    if ($query) {
        header("location: ../?page=data_kelas&status=1");
    } else {
        header("location: ../?page=data_kelas&status=4");
    }
} else {
    die("Access Denied...");
}
?>