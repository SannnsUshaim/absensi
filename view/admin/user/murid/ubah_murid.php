<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_murid = "SELECT * FROM murid WHERE id = '$id'";
    $query_murid = mysqli_query($koneksi, $sql_murid);
    $data_murid = mysqli_fetch_array($query_murid);
    $sql_user = "SELECT * FROM user WHERE user_id = '$id'";
    $query_user = mysqli_query($koneksi, $sql_user);
    $data_user = mysqli_fetch_array($query_user);
}
?>

<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    <form action="./controller/ubah_murid.php" class="flex flex-col gap-5" method="post">
        <div class="flex gap-10">
            <div class="basis-2/5 flex flex-col gap-5">
                <div class="flex gap-9 items-center">
                    <label for="id">NISN</label>
                    <input type="text" name="id" id="id" value="<?php echo $data_murid['id']?>" class="px-2 py-1 border-2 border-slate-500 rounded-lg focus:outline-none w-full" readonly>
                </div>
                <div class="flex gap-5 items-start">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="5" class="px-2 py-1 border-2 border-slate-500 rounded-lg focus:outline-none w-full"><?php echo $data_murid['alamat']?></textarea>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-5">
                    <label for="nama">Nama Murid</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $data_murid['nama']?>" class="px-2 py-1 border-2 border-slate-500 rounded-lg focus:outline-none" required>
                </div>
                <div class="flex items-center gap-8">
                    <label for="no_telp">No. Telpon</label>
                    <input type="text" name="no_telp" id="no_telp" maxlength="13" value="<?php echo $data_murid['no_telp']?>" class="px-2 py-1 border-2 border-slate-500 rounded-lg focus:outline-none" required>
                </div>
                <div class="flex items-center gap-[70px]">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas" class="px-2 py-1 border-2 border-slate-500 rounded-lg focus:outline-none" required>
                        <?php 
                            $sql = "SELECT * FROM kelas RIGHT JOIN murid ON murid.kelas = kelas.id_kelas";
                            $query = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <option value="<?=$data['id_kelas']?>"><?php echo "".$data['id_kelas']." | ".$data['grade']." ".$data['major']."";?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="flex items-center gap-12">
                    <label for="role">Jabatan</label>
                    <select name="jabatan" id="role" class="p-1 pr-4 border-2 border-slate-500 rounded-lg focus:outline-none">
                        <?php
                        if (isset($id)) {
                            $sql = "SELECT * FROM murid WHERE id = '$id'";
                            $query = mysqli_query($koneksi, $sql);
                            $data = mysqli_fetch_array($query);
                            echo "<option value='$data[id]'>$data[jabatan]</option>";
                        }
                        ?>
                    </select>
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
                            <input type="text" name="user_id" id="user_id" value="<?php echo $data_user['user_id']?>" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                            <input type="text" name="username" id="username" value="<?php echo $data_user['username']?>" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                            <input type="password" name="password" id="password" value="<?php echo $data_user['password']?>" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                            <input type="email" name="email" id="email" value="<?php echo $data_user['email']?>" class="border-2 border-slate-400 rounded-lg px-2 py-1 w-full focus:outline-none">
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-4">
                            <label for="profile_picture">Profile Picture</label>
                            <div class="flex gap-3 items-center">
                                <img src="./assets/img/profile.png" alt="profile picture" id="preview" class="w-[60px] h-[60px] rounded-full">
                                <input type="file" name="image" id="image" class="border-2 border-slate-400 rounded-lg" accept="image/" onchange="previewImage(event)">
                                
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
                                    $sql = "SELECT * FROM user WHERE user_id = '$id'";
                                    $query = mysqli_query($koneksi, $sql);
                                    $data = mysqli_fetch_array($query);
                                    echo "<option value='$data[user_id]'>$data[role]</option>";
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-6 items-center mt-auto">
                <button type="submit" name="save" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400 hover:cursor-pointer">Submit</button>
                <a href="?page=data_murid" class="hover:underline hover:text-blue-500">Cancel</a>
            </div>
    </form>
</div>