<?php
    $servername = "postgresql://postgres.zawbtiiwusvvbwsdngqr:[YOUR-PASSWORD]@aws-0-ap-southeast-1.pooler.supabase.com:6543/postgres"; // Ganti dengan URL database Anda
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan password database Anda
    $dbname = "giro"; // Nama database Anda

    // Membuat koneksi
    $connect = mysqli_connect($servername, $username, $password, $dbname);

?>
