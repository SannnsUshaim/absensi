<?php
    if ($_SESSION['role'] == "guru") {
        include 'guru/index.php';
    } else if ($_SESSION['role'] == "murid") {
        include 'murid/index.php';
    }

?>