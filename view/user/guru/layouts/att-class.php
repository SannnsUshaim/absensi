<div class="w-full">
    <div class="flex flex-col gap-4">
        <div class="text-xl font-bold">
            <p>Classes</p>
        </div>
        <div class="flex flex-col gap-5">
            <?php
            $sql = "SELECT * FROM kelas";
            $query = mysqli_query($koneksi, $sql);
            
            
            while ($data = mysqli_fetch_array($query)) {
                if  ($data['id_kelas'] != '-') {
                    echo '
                    <a href="./?page=attend&id='.$data['id_kelas'].'" class="flex items-center justify-between bg-slate-200 shadow-lg px-4 py-2 rounded-xl focus:bg-slate-800 focus:text-neutral-100">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                        <p class="text-base font-semibold">'.$data['grade'].' '.$data['major'].'</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                    </a>
                    ';
                }
            }
            ?>
        </div>
    </div>
</div>