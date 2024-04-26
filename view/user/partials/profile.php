<div class="bg-slate-100 rounded-xl shadow-lg py-8 pr-4">
    <div class="flex">
        <div class="flex items-start justify-center basis-2/5 px-2">
            <img src="assets/img/profile.png" alt="profile" class="w-[120px]">
        </div>
        <div class="flex flex-col basis-3/5 gap-2">
            <?php
            $userid = $_SESSION['user_id'];
            $sql = "SELECT * FROM user WHERE user_id = '$userid'";
            $query = mysqli_query($koneksi, $sql);
            $data = mysqli_fetch_array($query);
            ?>
            <div class="flex flex-col gap-1">
                <p class="text-base font-medium">User ID / <?php if ($_SESSION['role'] == "guru") {echo "NIP";} else if ($_SESSION['role'] == "murid") {echo "NISN";}?></p>
                <div class="bg-white border-[1px] border-slate-300 px-2 py-1 rounded-lg">
                    <?php echo $data['user_id']?>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-base font-medium">Username</p>
                <div class="bg-white border-[1px] border-slate-300 px-2 py-1 rounded-lg">
                    <?php echo $data['username']?>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-base font-medium">Email</p>
                <div class="bg-white border-[1px] border-slate-300 px-2 py-1 rounded-lg">
                    <?php echo $data['email']?>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-base font-medium">Password</p>
                <div class="bg-white border-[1px] border-slate-300 px-2 py-1 rounded-lg">
                    <?php echo "<input type='password' value='".$data['password']."' class='focus:outline-none' readonly/>"?>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <p class="text-base font-medium">Role</p>
                <div class="bg-white border-[1px] border-slate-300 px-2 py-1 rounded-lg">
                    <?php echo $data['role']?>
                </div>
            </div>
        </div>
    </div>
</div>