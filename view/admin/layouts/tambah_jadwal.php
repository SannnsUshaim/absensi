<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    <form action="./controller/tambah_jadwal.php" method="post" class="flex flex-col ">
        <div class="basis-3/5 flex gap-7 items-center">
            <div class="flex flex-col gap-8">
                <label for="id">ID Jadwal</label>
                <label for="hari">Hari</label>
                <label for="start">Start</label>
                <label for="end">End</label>
            </div>
            <div class="flex flex-col gap-5">
                <input type="text" name="id_jadwal" id="id_jadwal" maxlength="10" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
                <input type="text" name="hari" id="hari" maxlength="15" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
                <input type="time" name="start" id="start" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
                <input type="time" name="end" id="end" class="border-2 border-slate-500 rounded-lg px-2 py-1 focus:!outline-none w-full" required>
            </div>
        </div>
        <div class="absolute bottom-0">
            <div class="flex items-center gap-6 pb-8">
                <input type="submit" name="save" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 hover:cursor-pointer">
                <a href="?page=jadwal" class="hover:underline hover:text-blue-500">Cancel</a>
            </div>
        </div>
    </form> 
</div>