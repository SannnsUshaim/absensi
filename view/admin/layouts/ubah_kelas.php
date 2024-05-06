<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id'");
    $data = mysqli_fetch_array($query);
}
?>

<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    <form action="./controller/ubah_kelas.php" method="post" class="flex flex-col ">
        <div class="basis-3/5 flex gap-7 items-center">
            <div class="flex flex-col gap-8">
                <label for="kode">Kode Kelas</label>
                <label for="nama">Tingkatan</label>
                <label for="major">Jurusan</label>
                <label for="kode">Kode</label>
            </div>
            <div class="flex flex-col gap-5">
                <input type="text" name="id_kelas" id="id_kelas" value="<?php echo $data['id_kelas']?>" maxlength="5" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" readonly>
                <input type="text" name="grade" id="grade" value="<?php echo $data['grade']?>" maxlength="30" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
                <input type="text" name="major" id="major" value="<?php echo $data['major']?>" maxlength="50" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
                <input type="text" name="kode" id="kode" value="<?php echo $data['kode']?>" maxlength="10" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
            </div>
        </div>
        <div class="absolute bottom-0">
            <div class="flex items-center gap-6 pb-8">
                <input type="submit" name="save" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 hover:cursor-pointer">
                <a href="?page=data_kelas" class="hover:underline hover:text-blue-500">Cancel</a>
            </div>
        </div>
    </form> 
</div>