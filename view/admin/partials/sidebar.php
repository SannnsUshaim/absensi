<div class="basis-[20%] flex flex-col gap-8 w-full bg-slate-800 px-8">
    <div class="flex justify-center items-center py-8">
        <h1 class="font-bold text-2xl text-neutral-100">Absensi.</h1>
    </div>
    <ul class="py-8 flex flex-col gap-5">
        <li>
            <a href="./" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                    <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                </svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="?page=data_guru" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) {echo"";} else if ($_GET['page'] == "data_guru" || $_GET['page'] == "tambah_guru" || $_GET['page'] == "ubah_guru" || $_GET['page'] == "lihat_data_guru") { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET['page'])) {echo"none";} else if ($_GET['page'] == 'data_guru' || $_GET['page'] == "tambah_guru" || $_GET['page'] == "ubah_guru" || $_GET['page'] == "lihat_data_guru") {echo 'currentColor';} else {echo 'none';}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            Data Guru
            </a>
        </li>
        <li>
            <a href="?page=data_murid" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) {echo "";} else if ($_GET['page'] == "data_murid" || $_GET['page'] == "tambah_murid" || $_GET['page'] == "ubah_murid" || $_GET['page'] == "lihat_data_murid") { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET['page'])) {echo"none";} else if ($_GET['page'] == 'data_murid' || $_GET['page'] == "tambah_murid" || $_GET['page'] == "ubah_murid" || $_GET['page'] == "lihat_data_murid") {echo 'currentColor';} else {echo 'none';}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            Data Murid
            </a>
        </li>
        <li>
            <a href="?page=data_mapel" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) {echo"";} else if ($_GET['page'] == "data_mapel" || $_GET['page'] == "tambah_mapel" || $_GET['page'] == "ubah_mapel") { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET['page'])) {echo"none";} else if ($_GET['page'] == 'data_mapel' || $_GET['page'] == "tambah_mapel" || $_GET['page'] == "ubah_mapel") {echo 'currentColor';} else {echo 'none';}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                </svg>
                Data Mata Pelajaran
            </a>
        </li>
        <li>
            <a href="?page=data_kelas" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) {echo"";} else if ($_GET['page'] == "data_kelas" || $_GET['page'] == "tambah_kelas" || $_GET['page'] == "ubah_kelas") { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET['page'])) {echo"none";} else if ($_GET['page'] == 'data_kelas' || $_GET['page'] == "tambah_kelas" || $_GET['page'] == "ubah_kelas") {echo 'currentColor';} else {echo 'none';}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                Data Kelas
            </a>
        </li>
        <li>
            <a href="?page=jadwal" class="flex items-center text-sm text-white gap-3 p-3 rounded-xl <?php if (empty($_GET['page'])) {echo"";} else if ($_GET['page'] == "jadwal" || $_GET['page'] == "tambah_jadwal" || $_GET['page'] == "ubah_jadwal") { echo "bg-slate-200 !text-neutral-700 scale-105";}?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if (empty($_GET['page'])) {echo"none";} else if ($_GET['page'] == 'jadwal' || $_GET['page'] == "tambah_jadwal" || $_GET['page'] == "ubah_jadwal") {echo 'currentColor';} else {echo 'none';}?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
            </svg>
            Jadwal
            </a>
        </li>
    </ul>
    <div class="mt-auto py-8 border-t-2 border-slate-200 ">
        <?php
        while ($data = mysqli_fetch_array($query_user)) {
            if ($data['image'] > 0) {
                echo "
                <div class='flex gap-2 align-bottom'>
                    <div>
                        <img src='".$data['image']."' class='rounded-full w-[70px]' alt='profile img' />
                    </div>
                    <a href='?page=user' class='text-white hover:bg-slate-300 transition w-full px-2 py-2 rounded-xl'>
                        <p class='font-semibold text-xl'>".$data["username"]."</p>
                        <p class='text-slate-300'>".$data["email"]."</p>
                    </a>
                </div>
                ";
            } else {
                echo "
                <div class='flex gap-2 align-bottom'>
                    <div>
                        <img src='assets/img/profile.png' class='rounded-full w-[70px]' alt='profile img' />
                    </div>
                    <a href='?page=user' class='text-white hover:bg-slate-700 transition w-full px-2 rounded-xl'>
                        <p class='font-semibold text-xl'>".$data["username"]."</p>
                        <p class='text-slate-300'>".$data["email"]."</p>
                    </a>
                </div>
                ";
            }
        }
        ?>
    </div>
</div>