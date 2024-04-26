<?php
    $query_guru = mysqli_query($koneksi, "SELECT * FROM guru");
    $query_murid = mysqli_query($koneksi, "SELECT * FROM murid");
    $rows_guru = mysqli_num_rows($query_guru);
    $rows_murid = mysqli_num_rows($query_murid);
?>

<div class="flex flex-col p-8 h-full relative overflow-hidden">
    <header class="bg-none font-bold text-4xl text-slate-900">
        <h2>Selamat Datang! <?php echo $_SESSION['username'];?></h2>
    </header>
    <div class="flex flex-col gap-6 py-8">
        <h3 class="text-xl font-semibold">Overview Data</h3>
        <div class="flex gap-12">
            <div class="flex flex-col gap-8">
                <a href="?page=data_guru" class="flex gap-6 bg-slate-800 shadow-lg py-6 px-8 rounded-xl hover:scale-110 hover:translate-x-4 hover:translate-y-2 hover:shadow-2xl hover:bg-gradient-to-tr hover:from-slate-800 hover:to-slate-700 transition items-center">
                    <div class="text-neutral-200">
                        <p class="text-2xl font-semibold pb-2">Data Guru</p>
                        <p class="text-4xl font-medium text-right"><?php echo $rows_guru?></p>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24 text-neutral-200 opacity-40">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                    </div>
                </a>
                <a href="?page=tambah_guru" class="flex gap-4 bg-slate-800 py-3 px-5 rounded-xl text-neutral-200 font-medium items-center hover:scale-105 hover:translate-x-2 hover:-translate-y-1 hover:shadow-xl transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                    </svg>
                    Tambah data guru
                </a>
            </div>
            <div class="flex flex-col gap-8">
                <a href="?page=data_murid" class="flex gap-6 bg-slate-800 shadow-lg py-6 px-8 rounded-xl hover:scale-110 hover:translate-x-4 hover:translate-y-2 hover:shadow-2xl hover:bg-gradient-to-tr hover:from-slate-800 hover:to-slate-700 transition items-center">
                    <div class="text-neutral-200">
                        <p class="text-2xl font-semibold pb-2">Data Murid</p>
                        <p class="text-4xl font-medium text-right"><?php echo $rows_murid?></p>
                    </div>
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24 text-neutral-200 opacity-40">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                    </div>
                </a>
                <a href="?page=tambah_murid" class="flex gap-4 bg-slate-800 py-3 px-5 rounded-xl text-neutral-200 font-medium items-center hover:scale-105 hover:translate-x-2 hover:-translate-y-1 hover:shadow-xl transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                    </svg>
                    Tambah data murid
                </a>
            </div>
        </div>
    </div>
</div>