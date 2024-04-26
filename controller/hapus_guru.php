<?php 
    include "../config/koneksi.php";

    // Periksa jika parameter "id" guru dikirim melalui metode GET
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Siapkan pernyataan delete untuk user
        $sql_delete_user = "DELETE FROM user WHERE user_id = ?";
        
        // Siapkan pernyataan delete untuk guru
        $sql_delete_guru = "DELETE FROM guru WHERE id = ?";

        // Mencoba mengeksekusi pernyataan delete untuk user
        if($stmt_user = mysqli_prepare($koneksi, $sql_delete_user)){
            // Ikat variabel ke pernyataan persiapan sebagai parameter
            mysqli_stmt_bind_param($stmt_user, "s", $param_user_id);

            // Set parameter
            $param_user_id = trim($_GET["id"]);

            // Mencoba mengeksekusi pernyataan persiapan
            if(mysqli_stmt_execute($stmt_user)){
                // Tutup pernyataan
                mysqli_stmt_close($stmt_user);

                // Mencoba mengeksekusi pernyataan delete untuk guru setelah user berhasil dihapus
                if($stmt_guru = mysqli_prepare($koneksi, $sql_delete_guru)){
                    // Ikat variabel ke pernyataan persiapan sebagai parameter
                    mysqli_stmt_bind_param($stmt_guru, "s", $param_id);

                    // Set parameter
                    $param_id = trim($_GET["id"]);

                    // Mencoba mengeksekusi pernyataan persiapan
                    if(mysqli_stmt_execute($stmt_guru)){
                        // Jika data berhasil dihapus, redirect ke halaman data guru
                        header("location: ../?page=data_guru");
                        exit();
                    } else{
                        echo "Oops! Ada yang salah. Silakan coba lagi nanti.";
                    }
                }
            } else{
                echo "Oops! Ada yang salah. Silakan coba lagi nanti.";
            }
        }
    } else{
        // Jika parameter ID tidak ada dalam URL, redirect ke halaman error
        header("location: error.php");
        exit();
    }
?>