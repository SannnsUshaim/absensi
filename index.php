<?php
    session_start();
    // npx tailwindcss -i ./input.css -o ./output.css --watch

    include "config/koneksi.php";

    if ($_SESSION["status"] != 'login'){
        header('location: login.php');
    }

    if ($_SESSION['role'] == 'admin') {
        include "./view/admin/index.php";
    } else if ($_SESSION['role'] !== 'admin') {
        include "./view/user/index.php";
    }
?>