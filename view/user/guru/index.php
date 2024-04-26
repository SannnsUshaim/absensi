<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi.</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex min-h-screen w-full relative overflow-auto" id="body">
        <?php include "./view/user/partials/navbar.php";?>
        <div class="pt-16 px-4 basis-[100%] overflow-hidden">
            <?php include "./view/user/partials/header.php"?>
            <div>
                <?php 
                    if (empty($_GET['page'])) {
                        include "./view/user/guru/layouts/dashboard.php";
                    } else if ($_GET['page'] == "attend") {
                        include "./view/user/guru/layouts/attendance.php";
                    } else if ($_GET['page'] == "profile") {
                        include "./view/user/partials/profile.php";
                    } else if ($_GET['page'] == 'att-class') {
                        include "./view/user/guru/layouts/att-class.php";
                    } else if ($_GET['page'] == 'recap') {
                        include "./view/user/guru/layouts/recap.php";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<script src="node_modules/dayjs/dayjs.min.js"></script>
<script src="assets/js/script.js"></script>
</html>