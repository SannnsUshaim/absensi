<div id="sidebar" class="absolute flex flex-col w-[300px] bottom-0 top-0 px-6 py-2 bg-slate-800 transition z-[9999] -translate-x-80 justify-between">
    <div class="flex flex-col gap-8">
        <div class="flex justify-between items-center px-4 py-2">
            <div>
                <h1 class="font-semibold text-lg text-neutral-200">Absensi.</h1>
            </div>
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-teal-300" id='close-side'>
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
        </div>
        <div class="flex flex-col gap-4" id="nav-menu">
            <ul>
                <li>
                    <a href="./" class='flex gap-3 items-center text-neutral-200 font-semibold px-2 py-1 rounded-lg <?php if (empty($_GET['page'])) { echo '!text-slate-800 bg-neutral-200';}?>'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class='<?php if (empty($_GET['page'])) {echo 'w-4 h-4';} else {echo 'w-6 h-6';}?>'>
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            </ul>
            <div class="border-[1px] border-slate-500"></div>
            <ul class="flex flex-col gap-4">
                <li class="<?php if ($_SESSION['role'] == "guru") {echo "";} else {echo "hidden";}?>">
                    <a href="./?page=att-class" class='flex gap-3 items-center text-neutral-200 font-semibold px-2 py-1 rounded-lg <?php if (empty($_GET['page'])) { echo '';} else if ($_GET['page'] == "attend" || $_GET['page'] == 'att-class') {echo '!text-slate-800 bg-neutral-200';} else {echo "";}?>'>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class='<?php if (empty($_GET['page'])) {echo 'w-6 h-6';} else if ($_GET['page'] == 'attend') {echo 'w-4 h-4';} else {echo 'w-6 h-6';}?>'>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                        </svg>
                        <p>
                            Attendance
                        </p>
                    </a>
                </li>
                <li>
                    <a href="./?page=recap" class="flex gap-3 items-center text-neutral-200 font-semibold px-2 py-1 rounded-lg <?php if (empty($_GET['page'])) {echo "";} else if ($_GET['page'] == 'recap') {echo "!text-slate-800 bg-neutral-200";} else {echo "";}?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="<?php if (empty($_GET['page'])) {echo "w-6 h-6";} else if ($_GET['page'] == "recap") {echo "w-4 h-4";} else {echo "w-6 h-6";}?>">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                        </svg>
                        <p>Recap</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col gap-3 py-2">
        <a href="?page=profile" class="p-2 focus:bg-slate-100 focus:opacity-70 rounded-lg">
            <div class="flex gap-3">
                <div>
                    <img src="assets/img/profile.png" alt="profile pciture" class="w-[50px]">
                </div>
                <div class="flex flex-col text-slate-300 opacity-80">
                    <p class="text-lg font-semibold"><?php echo $_SESSION['username']?></p>
                    <p><?php echo $_SESSION['email']?></p>
                </div>  
            </div>
        </a>
        <footer class="!text-slate-400 opacity-80">&copy; SMK Negeri 4 Tangerang</footer>
    </div>
</div>
<div class="bg-slate-500 "></div>