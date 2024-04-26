<div class="flex">
    <?php include "./view/user/partials/sidebar.php"?>
    <div class="fixed z-0 right-0 left-0 top-0 bg-slate-800 py-4 px-4">
        <div class="flex justify-between items-center">
            <button id="side-but">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id='but-icon' class="w-8 h-8 text-teal-300 transition">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <div class='flex gap-3 text-teal-300 items-center font-medium'>
                <p><?php echo $_SESSION['username']?></p>
                <a href="controller/logout.php">
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6 !text-red-500'>
                    <path fill-rule='evenodd' d='M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z' clip-rule='evenodd' />
                </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
        const sidebar = document.getElementById('sidebar');
        const sideBut = document.getElementById('side-but');
        const butIcon = document.getElementById('but-icon');
        const closeBut = document.getElementById('close-side');
        const navMenu = document.getElementById('nav-menu');

        sideBut.addEventListener('click', function() {
            sidebar.classList.remove('-translate-x-80');
        });

        closeBut.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-80');
        });

        document.addEventListener('click', function(e) {
            if (!closeBut.contains(e.target) && !sideBut.contains(e.target) && !sidebar.contains(e.target) && !navMenu.contains(e.target)) {
                sidebar.classList.add('-translate-x-80')
            };
        });
</script>