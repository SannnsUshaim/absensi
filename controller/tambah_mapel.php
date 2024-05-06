<?php 
include "../config/koneksi.php";
if (isset($_POST['save'])) {
    $id = $_POST['id_mapel'];
    $nama = $_POST['nama_mapel'];
    $kode = $_POST['kode_mapel'];
    $query = mysqli_query($koneksi, "INSERT INTO mapel VALUES ('$id', '$nama', '$kode')");

    if ($query) {
        header("location: ../?page=data_mapel&status=1");
    } else {
        header("location: ../?page=data_mapel&status=4");
    }
} else {
    header("location: ../403.php");
    exit(0);
}
?>