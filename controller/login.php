<?php 
    session_start();

    require "../config/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userid = $_POST['user_id'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$userid' AND password='$password'");
    $is_exist = mysqli_num_rows($query);

    
    if ($is_exist > 0) {
        if (!$query) {
            header("Location: ../login.php?status=error");
        } else {
            $data = mysqli_fetch_array($query);
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
    
            $_SESSION['status'] = 'login';
    
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../login.php?status=failed");
    }
?>