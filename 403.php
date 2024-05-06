<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden Access</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex items-center justify-center h-screen w-full bg-slate-400">
        <div class="flex flex-col py-8 px-12 items-center bg-white rounded-3xl">
            <div>
                <img src="assets/img/403-Error-Forbidden.gif" class="w-[420px]" alt="forbidden">
            </div>
            <div class="flex flex-col items-center gap-3">
                <p class="text-base font-medium">I see what you doing here! but first, <span class="font-bold">sign in to a valid account</span></p>
                <a class="flex py-1 bg-blue-500 w-36 items-center justify-center font-semibold text-lg text-white rounded-lg" href="controller/logout.php">Sign In</a>
            </div>
        </div>
    </div>
</body>
</html>