<?php
    $sql = "SELECT * FROM user WHERE user_id = '$_SESSION[user_id]'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
?>

<div class="shadow-xl flex flex-col bg-white rounded-2xl p-8 h-full relative overflow-hidden font-medium">
    
</div>