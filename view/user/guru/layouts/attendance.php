<?php 
    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
    } else {
        $cari = "";
    }

    

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql_murid = "SELECT * FROM murid LEFT JOIN kelas ON murid.kelas = kelas.id_kelas";
        $sql_murid_search = "SELECT * FROM murid LEFT JOIN kelas ON murid.kelas = kelas.id_kelas WHERE murid.nama LIKE '%$cari%'";
        $query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '$id'");
        $query_murid = mysqli_query($koneksi, $sql_murid);
        $query_murid_search = mysqli_query ($koneksi, $sql_murid_search);
        $data_murid = mysqli_fetch_array($query_murid);
        $data_murid_search = mysqli_fetch_array($query_murid_search);
        $data = mysqli_fetch_array($query);
        $grade = $data['grade'];
        $major = $data['major'];
    }
?>

<div class="w-full">
    <div class="shadow-xl flex flex-col gap-4 bg-white rounded-2xl p-8 h-full relative overflow-hidden">
        <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 1) {
                    echo '
                    <div class="flex bg-green-300 px-4 py-1 w-full rounded-lg items-center gap-4 text-slate-800 font-medium">
                        <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        </i>
                        <p>Data guru <strong>berhasil</strong> ditambah!</p>
                    </div>
                    '; 
                } if ($_GET['status'] == 2) {
                    echo '
                    <div class="flex bg-green-300 px-4 py-1 w-full rounded-lg items-center gap-4 text-slate-800 font-medium">
                        <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        </i>
                        <p>Data guru <strong>berhasil</strong> diubah!</p>
                    </div>
                    ';
                } if ($_GET['status'] == 3) {
                    echo '
                    <div class="flex bg-red-300 px-4 py-1 w-full rounded-lg items-center gap-4 text-slate-800 font-medium">
                        <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        </i>
                        <p>Data guru <strong>berhasil</strong> dihapus!</p>
                    </div>
                    ';
                } if ($_GET['status'] == 4) {
                    echo '
                    <div class="flex bg-red-300 px-4 py-1 w-full rounded-lg items-center gap-4 text-slate-800 font-medium">
                        <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>
                        </i>
                        <p>Data <strong>error</strong> saat mengirim!</p>
                    </div>
                    ';
                }
            }
        ?>
        <div>
            <p><?php echo "".$grade." ".$major.""?></p>
        </div>
        <form action="" method="post" class="flex justify-between">
            <div class="basis-[100%] inline-flex gap-3 items-center px-3 py-2 border border-opacity-50 rounded-xl border-slate-500">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-500 w-4 h-4">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                    </svg>
                </i>
                <input type="text" name="cari" class="transition !outline-none focus:border-neutral-400 border-transparent border-b opacity-75 w-full" placeholder="Search" autocomplete="off" value="<?php echo $cari; ?>">
            </div>
        </form>
        <form action="./controller/cek_absen.php" class="flex flex-col gap-5">
            <table class="pt-4 w-full rounded-t-md overflow-hidden text-sm">
                <thead class="bg-slate-800 text-white">
                    <tr>
                        <th class="py-2 px-4 text-start">Absen</th>
                        <th class="py-2 px-4 text-start">Nama</th>
                        <th class="py-2 px-4 text-start">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (isset($cari)) {
                            $jumlah = $sql_murid_search;
                        } else {
                            $jumlah = $sql_murid;
                        }
    
                        $pages_query = mysqli_query($koneksi, $jumlah);
                        $rows = mysqli_num_rows($pages_query);
                        $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
    
                        $start = $page - 1;
    
                        if (isset($cari)) {
                            $sql = "SELECT murid.*, absen.status 
                            FROM murid 
                            LEFT JOIN absen ON murid.id = absen.id 
                            WHERE murid.id LIKE '%$cari%' OR murid.nama LIKE '%$cari%' OR absen.status LIKE '%$cari'
                            ORDER BY murid.nama ASC";
                        }
                        $query = mysqli_query($koneksi, $sql);
    
                        while ($data = mysqli_fetch_array($query)) {
                            $start++;
                            echo "<tr class='border-b border-slate-300'>";
                            echo "<td class='px-4 py-2'>".$start."</td>";
                            echo "<td class='px-4 py-2'>".$data['nama']."</td>";
                            echo '<td class="px-4 py-2">
                                <select name="status" id="status" class="p-1 pr-4 border-[1px] border-slate-500 rounded-lg focus:outline-none">'?>
                                    <?php 
                                        // Kueri SQL untuk mendapatkan informasi tentang kolom 'role' di tabel 'murid'
                                        $sql = "SHOW COLUMNS FROM absen WHERE Field = 'status'";
                                        $query = mysqli_query($koneksi, $sql);
    
                                        // Periksa apakah ada hasil dari kueri
                                        if ($query) {
                                            $data_role = mysqli_fetch_assoc($query);
    
                                            // Ekstrak nilai enum dari informasi kolom "role"
                                            preg_match("/^enum\(\'(.*)\'\)$/", $data_role['Type'], $matches);
                                            $enum_values = explode("','", $matches[1]);
    
                                            // Tampilkan nilai enum sebagai opsi dalam dropdown
                                            foreach ($enum_values as $value) {
                                                ?>
                                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                <?php
                                            }
                                        } else {
                                            echo "Gagal menjalankan kueri: " . mysqli_error($koneksi);
                                        }
                                    ?><?php
                                '</select>
                            </td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="flex gap-8 items-center w-full">
                <a href="./?page=att-class" class="text-base font-medium">back</a>
                <input type="submit" name="attend" id="attend" value="Attend" class="bg-teal-300 text-slate-800 font-semibold py-1 rounded-lg w-full">
            </div>
        </form>
    </div>
</div>