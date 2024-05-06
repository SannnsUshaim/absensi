<?php
    include "../config/koneksi.php";

    if (isset($_POST['save'])) {
        $id = $_POST['id_mapel'];
        $nama = $_POST['nama_mapel'];
        $kode = $_POST['kode_mapel'];

        $sql = "UPDATE mapel SET nama_mapel = '$nama', kode_mapel = '$kode' WHERE id_mapel = '$id'";
        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            header("location: ../?page=data_mapel&status=2");
        } else {
            header("location: ../?page=data_mapel&status=4");
        }
    } else {
        header("location: ../403.php");
        exit(0);
    }

?>