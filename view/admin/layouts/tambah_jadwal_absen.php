<?php
$sql_jadwal = "SELECT * FROM jadwal";
$query_jadwal = mysqli_query($koneksi, $sql_jadwal);
$sql_kelas = "SELECT * FROM kelas";
$query_kelas = mysqli_query($koneksi, $sql_kelas);
$sql_mapel = "SELECT * FROM mapel";
$query_mapel = mysqli_query($koneksi, $sql_mapel);

?>

<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    <form action="./controller/tambah_jadwal_absen.php" method="post" class="flex flex-col ">
        <div class="basis-3/5 flex gap-7 items-center">
            <div class="flex flex-col gap-8">
                <label for="id">Jadwal</label>
                <label for="hari">Mapel</label>
                <label for="start">kelas</label>
            </div>
            <div class="flex flex-col gap-5">
                <select name="id_jadwal" id="id_jadwal" class="border-2 border-slate-500 rounded-xl p-2 focus:!outline-none w-full">
                    <?php
                    while ($data_jadwal = mysqli_fetch_array($query_jadwal)) {
                        echo "<option value='$data_jadwal[id_jadwal]'>$data_jadwal[hari], $data_jadwal[start] - $data_jadwal[end]</option>";
                    }
                    ?>
                </select>
                <select name="id_mapel" id="id_mapel" class="border-2 border-slate-500 rounded-xl p-2 focus:!outline-none w-full">
                    <?php
                    while ($data_mapel = mysqli_fetch_array($query_mapel)) {
                        echo "<option value='$data_mapel[id_mapel]'>$data_mapel[nama_mapel] | $data_mapel[kode_mapel]</option>";
                    }
                    ?>
                </select>
                <select name="id_kelas" id="id_kelas" class="border-2 border-slate-500 rounded-xl p-2 focus:!outline-none w-full">
                    <?php
                    while ($data_kelas = mysqli_fetch_array($query_kelas)) {
                        if ($data_kelas['id_kelas'] != '-') {
                            echo "<option value='$data_kelas[id_kelas]'>$data_kelas[grade] $data_kelas[major] | $data_kelas[kode]</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="absolute bottom-0">
            <div class="flex items-center gap-6 pb-8">
                <input type="submit" name="save" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 hover:cursor-pointer">
                <a href="?page=data_jadwal_absen" class="hover:underline hover:text-blue-500">Cancel</a>
            </div>
        </div>
    </form> 
</div>