<?php
    if ($_SESSION['role'] == "guru" || $_SESSION['role'] == "admin") {
        include 'guru/index.php';
    } else if ($_SESSION['role'] == "murid" || $_SESSION == "admin") {
        include 'murid/index.php';
    }

?>