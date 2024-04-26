<?php
include "../config/koneksi.php";

if (isset($_POST['save'])) {
    // Check if the file is uploaded successfully
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
            $mapel = $_POST['mapel'];
            $walas = isset($_POST['walas']) ? $_POST['walas'] : 0; // Use 0 or 1 as boolean
            $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : null;
            $user_id = $_POST['user_id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            // Insert data into database
            $query_guru = mysqli_query($koneksi, "INSERT INTO guru (id, user_id, nama, alamat, no_telp, walas, mapel, kelas) VALUES ('$id', '$user_id', '$nama', '$alamat', '$no_telp', '$walas', '$mapel', '$kelas')");
            $query_user = mysqli_query($koneksi, "INSERT INTO user (user_id, username, password, email, role, image) VALUES ('$user_id', '$username', '$password', '$email', '$role', '$target_file')");

            if ($query_guru && $query_user) {
                header('Location: ../?page=data_guru&status=1');
                exit;
            } else {
                header("location: ../?page=data_guru&status=4");
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            // Jika pengunggahan gambar gagal
            header("location: ../?page=data_guru&status=4");
        }
    } else {
        // If no file is uploaded, proceed with other form data processing
        // Insert other form data into database
        // Ambil data dari formulir input
    // Ambil data dari formulir input
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $mapel = $_POST['mapel'];
        $walas = isset($_POST['walas']) ? $_POST['walas'] : 0;
        $kelas = isset($_POST['kelas']) ? $_POST['kelas'] : null;
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        // Lakukan pengecekan apakah user dengan username yang diinput sudah ada dalam database
        $query_check_user = mysqli_query($koneksi, "SELECT user_id FROM user WHERE user_id = '$user_id'");
        if (mysqli_num_rows($query_check_user) == 0) {
            // Jika user belum ada, buat entri baru dalam tabel user
            $query_insert_user = mysqli_query($koneksi, "INSERT INTO user (user_id, username, password, email, role) VALUES ('$user_id', '$username', '$password', '$email', '$role')");
            if (!$query_insert_user) {
                header("location: ../?page=data_guru&status=4");
                die("Error creating user: " . mysqli_error($koneksi));
            }
            // Dapatkan user ID yang baru dibuat
            $user_id = mysqli_insert_id($koneksi);
        } else {
            // Jika user sudah ada, gunakan user ID yang sudah ada
            $row = mysqli_fetch_assoc($query_check_user);
            $user_id = $row['user_id'];
        }

        // Masukkan data guru beserta user ID ke dalam tabel guru
        $query_insert_guru = mysqli_query($koneksi, "INSERT INTO guru (id, user_id, nama, alamat, no_telp, walas, mapel, kelas) VALUES ('$id', '$user_id', '$nama', '$alamat', '$no_telp', '$walas', '$mapel', '$kelas')");
        if (!$query_insert_guru) {
            header("location: ../?page=data_guru&status=4");
            die("Error inserting guru data: " . mysqli_error($koneksi));
        }

        // Redirect atau tampilkan pesan berhasil disini
        header('Location: ../?page=data_guru&status=1');
    }
} else {
    die ('Access Denied...');
}
?>
