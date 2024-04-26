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
    <form style="font-family: 'Inter', sans-serif;" action="controller/login.php" method="post" class="w-full h-screen flex justify-center items-center bg-[#EEF2F5] overflow-hidden">
        <div class="flex bg-white rounded-2xl lg:p-16 lg:min-w-[50rem] lg:h-[30rem] md:min-w-1 md:py-16 md:px-14 sm:py-16 sm:px-10 items-center">
            <div class="hidden md:block">
                <img src="assets/img/login.jpg" alt="login" class="md:lg:w-96 md:w-80">
            </div>
            <div class="basis-2/5 flex flex-col gap-4 justify-center">
                <h1 class="lg:text-3xl md:text-2xl sm:text-xl font-bold">Login</h1>
                <?php 
                if(isset($_GET['status'])){
                    if ($_GET['status'] == "failed"){
                        echo '
                        <p class="flex items-center gap-3 py-2 px-3 bg-red-400 rounded-lg text-white text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                            Wrong password or username!
                        </p>
                        ';
                    } else if ($_GET['status'] == "logout"){
                        echo '
                        <p class="flex items-center gap-3 py-2 px-3 bg-blue-400 rounded-lg text-white text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                            You must login first!
                        </p>
                        ';
                    } else if ($_GET['status'] == "error"){
                        echo '
                        <p class="flex items-center gap-3 py-2 px-3 bg-red-400 rounded-lg text-white text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                            Error, Something wrong!
                        </p>
                        ';
                    }
                }
                ?>                
                <div class="flex flex-col gap-2">
                    <label for="password" class="font-medium text-slate-500">User Id</label>                    
                    <input type="text" name="user_id" placeholder="" class=" !outline-none  bg-slate-200 px-3 py-1.5 rounded-lg">
                    <label for="password" class="font-medium text-slate-500">Password</label>                    
                    <input type="password" name="password" placeholder="" class=" !outline-none  bg-slate-200 px-3 py-1.5 rounded-lg">
                </div>
                <div class="flex flex-col gap-4 text-center mt-4">
                    <input type="submit" value="Login" class="transition hover:opacity-75 bg-blue-500 py-2 px-4 rounded-lg text-white font-medium ">
                </div>
            </div>
        </div>
    </form>
</body>
</html>