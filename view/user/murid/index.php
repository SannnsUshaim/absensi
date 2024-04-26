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
<div class="flex min-h-screen w-full relative" id="body">
        <?php include "./view/user/partials/navbar.php";?>
        <div class="pt-16 px-4 basis-[100%]">
            <?php include "./view/user/partials/header.php"?>
            <div>
                <?php 
                    if (empty($_GET['page'])) {
                        include "./view/user/murid/layouts/dashboard.php";
                    } else if ($_GET['page'] == "recap") {
                        include "./view/user/murid/layouts/recap.php";
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="node_modules/dayjs/dayjs.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>