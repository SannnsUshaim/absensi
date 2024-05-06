<?php
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    // Pastikan file diakses secara langsung melalui POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Periksa apakah file diupload berhasil dan tidak ada error
        if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Tangkap data gambar dari formulir
            $image = $_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];

            // Tentukan lokasi penyimpanan gambar di server
            $target_dir = "assets/img/profile/";
            $target_file = $target_dir . basename($image);

            // Pindahkan gambar ke lokasi yang ditentukan
            if (move_uploaded_file($image_temp, $target_file)) {
                // Jika pengunggahan gambar berhasil, lanjutkan dengan penyimpanan data ke database
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $no_telp = $_POST['no_telp'];
                $jabatan = $_POST['jabatan'];
                $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : null;
                $user_id = $_POST['user_id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $role = $_POST['role'];

                // Update data di database
                $query_update_murid = mysqli_query($koneksi, "UPDATE murid SET nama='$nama', alamat='$alamat', no_telp='$no_telp', kelas='$kelas' WHERE id='$id'");
                $query_update_user = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', email='$email', image='$target_file' WHERE user_id='$user_id'");

                if ($query_update_murid && $query_update_user) {
                    header('Location: ../?page=data_murid&status=2'); // status=2 untuk update berhasil
                    exit;
                } else {
                    header("location: ../?page=data_murid&status=4");
                    echo "Error: " . mysqli_error($koneksi);
                }
            } else {
                // Jika pengunggahan gambar gagal
                header("location: ../?page=data_murid&status=4");
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            // Jika tidak ada file yang diupload, lanjutkan dengan pemrosesan data formulir lainnya
            // Ambil data dari formulir input
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];
            $jabatan = $_POST['jabatan'];
            $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : null;
            $user_id = $_POST['user_id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            // Lakukan update data guru dan user
            $query_update_murid = mysqli_query($koneksi, "UPDATE murid SET nama='$nama', alamat='$alamat', no_telp='$no_telp', kelas='$kelas' WHERE id='$id'");
            $query_update_user = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', email='$email' WHERE user_id='$user_id'");

            if ($query_update_murid && $query_update_user) {
                header('Location: ../?page=data_murid&status=2'); // status=2 untuk update berhasil
                exit;
            } else {
                header("location: ../?page=data_murid&status=4");
                echo "Error: " . mysqli_error($koneksi);
            }
        }
    } else {
        header("location: ../403.php");
        exit(0);
    }
}
?>