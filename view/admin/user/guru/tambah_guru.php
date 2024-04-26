<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    <form id="guruForm" action="./controller/tambah_guru.php" method="post" class="flex flex-col gap-5">
        <div class="flex flex-col gap-5">
            <div class="flex gap-10">
                <div class="basis-2/5 flex gap-12 items-center">
                    <label for="id">NIP</label>
                    <input type="text" name="id" id="id" class="border-2 border-slate-400 rounded-lg px-2 py-1 focus:outline-none w-full" required>
                </div>
                <div class="flex gap-10 items-center">
                    <label for="nama">Nama Guru</label>
                    <input type="text" name="nama" id="nama" class="border-2 border-slate-400 rounded-lg px-2 py-1 focus:outline-none" required>
                </div>
            </div>
            <div class="flex gap-10">
                <div class="basis-2/5 flex gap-5 align-top">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="5" class="border-2 border-slate-400 rounded-lg px-3 py-2 focus:outline-none w-full"></textarea>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex gap-11 items-center">
                        <label for="no_telp">No. Telpon</label>
                        <input type="text" name="no_telp" id="no_telp" maxlength="13" class="border-2 border-slate-400 rounded-lg px-2 py-1 focus:outline-none">
                    </div>
                    <div class="flex gap-3 items-center">
                        <label for="mapel">Mata Pelajaran</label>
                        <select name="mapel" id="mapel" class="border-2 border-slate-400 rounded-lg px-2 py-1 focus:outline-none">
                            <?php
                                $sql = "SELECT * FROM mapel";
                                $query = mysqli_query($koneksi, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?=$data['id_mapel']?>"><?php echo "".$data['id_mapel']." | ".$data['nama_mapel'].""?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex gap-5">
                        <div class="flex gap-3 items-center">
                            <input type="checkbox" name="walas" id="walas" class="custom-checkbox hover:cursor-pointer">
                            <label for="walas">Walas</label>
                        </div>
                        <div class="flex gap-5 items-center hidden" id="kelas">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelasSelect" class="border-2 border-slate-400 rounded-lg px-2 py-1 focus:outline-none">
                                <?php 
                                    $sql = "SELECT * FROM kelas";
                                    $query = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($query)) {
                                        // Tampilkan informasi lengkap dan simpan id_kelas sebagai nilai
                                        $kelas_info = $data['id_kelas']." | ".$data['grade']." ".$data['major'];
                                        ?>
                                        <option value="<?=$data['id_kelas']?>"><?=$kelas_info?></option>
                                        <?php
                                    }
                                ?>
                                
                            </select>
                        </div>
                            <script>
                                function submitForm() {
                                    // Ambil status checkbox Walas
                                    var isWalasChecked = document.getElementById('walas').checked;
                                    // Ambil nilai kelas dari select
                                    var kelasSelect = document.getElementById('kelasSelect');
                                    var selectedKelas = kelasSelect.options[kelasSelect.selectedIndex].value;

                                    // Jika Walas tidak dicentang, atur nilai kelas ke "Bukan Walas"
                                    if (!isWalasChecked) {
                                        selectedKelas = "Bukan Walas";
                                    }

                                    // Set nilai kelas ke input dengan nama "kelas"
                                    document.getElementById('kelasHiddenInput').value = selectedKelas;

                                    // Submit form
                                    document.getElementById('guruForm').submit();
                                }
                            </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <h1 class="font-bold text-xl">Buat akun user</h1>
            <div class="flex gap-10 w-full">
                <div class="basis-2/5 flex flex-row gap-5 items-center">
                    <div class="flex flex-col gap-7">
                        <label for="user_id">User ID</label>
                        <label for="username">Username</label>
                        <label for="password">password</label>
                        <label for="email">Email</label>
                    </div>
                    <div class="flex flex-col items-center gap-4 w-full">
                        <input type="text" name="user_id" id="user_id" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                        <input type="text" name="username" id="username" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                        <input type="password" name="password" id="password" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                        <input type="email" name="email" id="email" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-4">
                        <label for="profile_picture">Profile Picture</label>
                        <div class="flex gap-3 items-center">
                            <img src="./assets/img/profile.png" alt="profile picture" id="preview" class="w-[60px] h-[60px] rounded-full">
                            <input type="file" name="image" id="image" class="" accept="image/" onchange="previewImage(event)">
                            <script>
                                function previewImage(event) {
                                    const input = event.target;
                                    if (input.files && input.files[0]) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            document.getElementById('preview').src = e.target.result;
                                            console.log("berhasil berubah");
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="p-1 pr-4 rounded-xl border-2 border-slate-500">
                            <?php
                                // Kueri SQL untuk mendapatkan informasi tentang kolom 'role'
                                $sql = "SHOW COLUMNS FROM user WHERE Field = 'role'";
                                $query = mysqli_query($koneksi, $sql);

                                // Periksa apakah ada hasil dari kueri
                                if ($query) {
                                    $data_user = mysqli_fetch_assoc($query);
                                    // Extract nilai enum dari informasi kolom
                                    preg_match("/^enum\(\'(.*)\'\)$/", $data_user['Type'], $matches);
                                    $enum_values = explode("','", $matches[1]);

                                    // Tampilkan nilai enum sebagai opsi dalam dropdown
                                    foreach ($enum_values as $value) {
                                        ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value;?></option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-6 items-center mt-auto">
            <input type="hidden" name="kelas_hidden" id="kelasHiddenInput">
            <button type="submit" name="save" onclick="submitForm()" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 hover:cursor-pointer">Submit</button>
            <a href="?page=data_guru" class="hover:underline hover:text-blue-500">Cancel</a>
        </div>
        <script>
            const checkWalas = document.getElementById('walas');
            const kelas = document.getElementById('kelas');

            checkWalas.addEventListener("change", function() {
                if (this.checked) {
                    kelas.classList.remove('hidden');
                } else {
                    kelas.classList.add('hidden')
                }
            })
    </script>
    </form>
</div>