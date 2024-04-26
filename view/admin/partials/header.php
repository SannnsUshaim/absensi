<header class='flex items-center justify-between bg-white px-8 py-6'>
    <h1 class="font-semibold text-xl flex gap-3 items-center"><?php 
        if (empty($_GET['page'])) {
            echo "Dashboard";
        } else if ($_GET['page'] == "data_murid") {
            echo "Data Murid";
        } else if ($_GET['page'] == "data_guru") {
            echo "Data Guru";
        } else if ($_GET['page'] == "data_mapel") {
            echo "Data Mata Pelajaran";
        } else if ($_GET['page'] == "tambah_mapel") {
            echo '<a href="?page=data_mapel">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Tambah Mata Pelajaran';
        } else if ($_GET['page'] == "tambah_murid") {
            echo '<a href="?page=data_murid">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Tambah Data Murid';
        } else if ($_GET['page'] == "tambah_guru") {
            echo '<a href="?page=data_guru">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Tambah Data Guru';
        } else if ($_GET['page'] == "ubah_murid") {
            echo '<a href="?page=data_murid">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Ubah Data Murid';
        } else if ($_GET['page'] == "ubah_guru") {
            echo '<a href="?page=data_guru">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Ubah Data Guru';
        } else if ($_GET['page'] == "ubah_mapel") {
            echo '<a href="?page=data_mapel">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Ubah Mata Pelajaran';
        } else if ($_GET['page'] == "user") {
            echo "Profile User";
        } else if ($_GET['page'] == "data_kelas") {
            echo "Data Kelas";
        } else if ($_GET['page'] == "ubah_kelas") {
            echo '<a href="?page=data_kelas">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Ubah Kelas';
        } else if ($_GET['page'] == "tambah_kelas") {
            echo '<a href="?page=data_kelas">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Tambah Kelas';
        } else if ($_GET['page'] == "lihat_data_guru") {
            echo '<a href="?page=data_guru">
            <i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>              
            </i>
        </a> Lihat Data Guru';
        } else if ($_GET['page'] == "jadwal") {
            echo "Jadwal";
        }
    ?></h1>
    <div class='flex gap-3'>
        <p><?php echo $_SESSION['username']?></p>
        <a href="controller/logout.php">
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6 text-red-400'>
            <path fill-rule='evenodd' d='M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z' clip-rule='evenodd' />
        </svg>
        </a>
    </div>
</header>