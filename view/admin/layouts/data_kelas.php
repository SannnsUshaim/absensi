<?php 
    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
    } else {
        $cari = "";
    }
?>

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
                    <p>Data kelas <strong>berhasil</strong> ditambah!</p>
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
                    <p>Data kelas <strong>berhasil</strong> diubah!</p>
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
                    <p>Data kelas <strong>berhasil</strong> dihapus!</p>
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
<form action="" method="post" class="flex justify-between">
        <div class="basis-2/4 inline-flex gap-3 items-center px-3 py-2 border border-opacity-50 rounded-xl border-slate-500">
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-500 w-5 h-5">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                </svg>
            </i>
            <input type="text" name="cari" class="transition !outline-none focus:border-neutral-400 border-transparent border-b opacity-75" placeholder="Search" autocomplete="off" value="<?php echo $cari; ?>">
        </div>
        <a href="?page=tambah_kelas" class="basis-1/4 bg-slate-800 py-2 px-4 rounded-lg text-white font-medium flex gap-2 items-center">
            <i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm.75-10.25v2.5h2.5a.75.75 0 0 1 0 1.5h-2.5v2.5a.75.75 0 0 1-1.5 0v-2.5h-2.5a.75.75 0 0 1 0-1.5h2.5v-2.5a.75.75 0 0 1 1.5 0Z" clip-rule="evenodd" />
                </svg>
            </i>
            Tambah data kelas
        </a>
    </form>
    <table class="pt-4 w-full rounded-t-md overflow-hidden text-sm">
        <thead class="bg-slate-800 text-white">
            <tr>
                <th class="py-2 px-4 text-start">No.</th>
                <th class="py-2 px-4 text-start">Kode Kelas</th>
                <th class="py-2 px-4 text-start">Tingkatan</th>
                <th class="py-2 px-4 text-start">Jurusan</th>
                <th class="py-2 px-4 text-start">Kode</th>
                <th class="py-2 px-4 text-start">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (isset($cari)) {
                    $jumlah = "SELECT * FROM kelas WHERE id_kelas LIKE '%$cari%' OR grade LIKE '%$cari%' OR major LIKE '%$cari%' OR kode LIKE '%$cari%'";
                } else {
                    $jumlah = "SELECT * FROM kelas";
                }

                $limit = 12;

                $pages_query = mysqli_query($koneksi, $jumlah);
                $rows = mysqli_num_rows($pages_query);
                $page = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;

                $pages = ceil($rows / $limit);
                $start = ($page - 1) * $limit;

                if (isset($cari)) {
                    $sql = "SELECT * FROM kelas WHERE id_kelas LIKE '%$cari%' OR grade LIKE '%$cari%' OR major LIKE '%$cari%' OR kode LIKE '%$cari' ORDER BY id_kelas ASC LIMIT $start, $limit";
                }
                $query = mysqli_query($koneksi, $sql);

                while ($data = mysqli_fetch_array($query)) {
                    $start++;
                    echo "<tr class='border-b border-slate-300'>";
                    echo "<td class='px-4 py-2'>".$start."</td>";
                    echo "<td class='px-4 py-2'>".$data['id_kelas']."</td>";
                    echo "<td class='px-4 py-2'>".$data['grade']."</td>";
                    echo "<td class='px-4 py-2'>".$data['major']."</td>";
                    echo "<td class='px-4 py-2'>".$data['kode']."</td>";
                    echo "<td class='px-4 py-2 flex items-center gap-2'>
                        <a href='?page=ubah_kelas&id=$data[id_kelas]' class='px-2 py-1.5 text-blue-500'>
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-4 h-4'>
                                <path d='M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z' />
                                <path d='M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z' />
                            </svg>
                        </a>
                        <a href='?page=data_kelas&delete=4&id=$data[id_kelas]' class='text-red-400'>
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-4 h-4'>
                                <path fill-rule='evenodd' d='M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z' clip-rule='evenodd' />
                            </svg>
                        </a>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        if (empty($_GET['hal'])) {
            $active_page = 1;
        } else {
            $active_page = (int)$_GET['hal'];
        }
    ?>
    <div class="flex items-center mt-auto justify-between">
        <div class="flex items-center gap-2">
            <?php 
                if ($active_page > 1) {
                    echo '
                    <a href="?page=data_murid&hal='.($page - 1).'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </a>
                    ';
                } else {
                    echo '<a class="opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </a>';
                }
            ?>
            <?php 
                if ($active_page < $pages) {
                    echo '
                        <a href="?page=data_murid&hal='.($page + 1).'">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    ';
                } else {
                    echo '
                    <a class="opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                    ';
                }
            ?>
        </div>
        <div class="text-sm">
            <h1><?php echo $rows;?> Total Data</h1>
        </div>
    </div>
</div>