<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location: ../../403.php");
    exit(0);
}

$userid = $_SESSION['user_id'];

$query_user = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id = '$userid'")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi.</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full">
    <div class="flex min-h-screen w-full relative">
        <?php
        if (empty($_GET['delete'])){
            echo '';
        } else if ($_GET['delete'] == 1) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE id = '$id'") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "
                    <form method='POST' action='./controller/hapus_guru.php?id=$data[id]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id]</b> record.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=data_guru' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        } else if ($_GET['delete'] == 2) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM murid WHERE id = '$id'") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id'];
                    echo "
                    <form method='POST' action='./controller/hapus_murid.php?id=$data[id]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id]</b> record.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=data_murid' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        } else if ($_GET['delete'] == 3) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel = '$id'") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id_mapel'];
                    echo "
                    <form method='POST' action='./controller/hapus_mapel.php?id=$data[id_mapel]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id_mapel]</b> record and all related.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=data_mapel' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        } else if ($_GET['delete'] == 4) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id'") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id_kelas'];
                    echo "
                    <form method='POST' action='./controller/hapus_kelas.php?id=$data[id_kelas]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id_kelas]</b> record and all related.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=data_kelas' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        } else if ($_GET['delete'] == 5) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id_jadwal = '$id'") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    $id = $data['id_jadwal'];
                    echo "
                    <form method='POST' action='./controller/hapus_jadwal.php?id=$data[id_jadwal]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id_jadwal]</b> record and all related.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=jadwal' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        } else if ($_GET['delete'] == 6) {
            if (isset($_GET['id_jadwal'], $_GET['id_kelas'], $_GET['id_mapel'])) {
                $id_jadwal = $_GET['id_jadwal'];
                $id_kelas = $_GET['id_kelas'];
                $id_mapel = $_GET['id_mapel'];
                $query = mysqli_query($koneksi, "SELECT * FROM jadwal_absen LEFT JOIN jadwal ON jadwal_absen.id_jadwal = jadwal.$data[id_jadwal] LEFT JOIN kelas ON jadwal_absen.id_kelas = kelas.$data[id_kelas] LEFT JOIN mapel ON jadwal_absen.id_mapel = mapel.$data[id_mapel]") or die('Query Error : '.mysqli_error($koneksi));
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "
                    <form method='POST' action='./controller/hapus_jadwal_absen.php?id_jadwal=$data[id_jadwal]&id_kelas=$data[id_kelas]&id_mapel=$data[id_mapel]' class='w-full h-full absolute z-10'>
                        <div class='flex w-full h-full justify-center items-center bg-black bg-opacity-15'>
                            <div class='bg-white px-6 py-4 shadow-lg rounded-xl'>
                                <h1 class='mb-3' >You're about to delete <b>$data[id_jadwal]</b> record and all related.</h1> 
                                <div class='flex text-white gap-1 float-right'>
                                    <button type='submit' name='delete' class='py-1 px-3 bg-blue-500 rounded-lg'>Ok</button>
                                    <a href='?page=data_jadwal_absen' class='py-1 px-3 bg-red-500 rounded-lg'>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    ";
                }
            }  
        }
        ?>
        <?php include "partials/sidebar.php"?>
        <div class="basis-[80%] flex flex-col bg-gray-100 max-h-full">
            <?php include "partials/header.php"?>
            <div class="p-6 flex flex-col gap-6 h-full">    
            <?php 
                if(empty($_GET['page'])) {
                    include "./view/admin/layouts/dashboard.php";
                } else if ($_GET['page'] == "data_murid") {
                    include "./view/admin/user/murid/data_murid.php";
                } else if ($_GET['page'] == "data_guru") {
                    include "./view/admin/user/guru/data_guru.php";
                } else if ($_GET['page'] == "tambah_murid") {
                    include "./view/admin/user/murid/tambah_murid.php";
                } else if ($_GET['page'] == "tambah_guru") {
                    include "./view/admin/user/guru/tambah_guru.php";
                } else if ($_GET['page'] == "user") {
                    include "./view/admin/layouts/user.php";
                } else if ($_GET['page'] == "data_mapel") {
                    include "./view/admin/layouts/data_mapel.php";
                } else if ($_GET['page'] == "tambah_mapel") {
                    include "./view/admin/layouts/tambah_mapel.php";
                } else if ($_GET['page'] == "data_kelas") {
                    include "./view/admin/layouts/data_kelas.php";
                } else if ($_GET['page'] == "tambah_kelas") {
                    include "./view/admin/layouts/tambah_kelas.php";
                } else if ($_GET['page'] == "ubah_murid") {
                    include "./view/admin/user/murid/ubah_murid.php";
                } else if ($_GET['page'] == "ubah_guru") {
                    include "./view/admin/user/guru/ubah_guru.php";
                } else if ($_GET['page'] == "ubah_mapel") {
                    include "./view/admin/layouts/ubah_mapel.php";
                } else if ($_GET['page'] == "ubah_kelas") {
                    include "./view/admin/layouts/ubah_kelas.php";
                } else if ($_GET['page'] == "jadwal") {
                    include "./view/admin/layouts/jadwal.php";
                } else if ($_GET['page'] == "tambah_jadwal") {
                    include "./view/admin/layouts/tambah_jadwal.php";
                } else if ($_GET['page'] == "ubah_jadwal") {
                    include "./view/admin/layouts/ubah_jadwal.php";
                } else if ($_GET['page'] == "data_jadwal_absen") {
                    include "./view/admin/layouts/data_jadwal_absen.php";
                } else if ($_GET['page'] == "ubah_jadwal_absen") {
                    include "./view/admin/layouts/ubah_jadwal_absen.php";
                } else if ($_GET['page'] == "tambah_jadwal_absen") {
                    include "./view/admin/layouts/tambah_jadwal_absen.php";
                }
            ?>
            <div class="p-4 bg-white rounded-xl">
                    SMKN 4 Kota Tangerang
                </div>
            </div>
        </div>
    </div>
</body>
</html>