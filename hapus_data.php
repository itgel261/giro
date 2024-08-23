<!--Untuk menghapus data mahasiswa yang ada pada tabel Mahasiswa -->
<?php
include "koneksi.php";
$hapus = mysqli_query($connect, "DELETE FROM datagiro WHERE nogiro='$_GET[nogiro]'");
if ($hapus) {
    header('location:data_giro.php');
} else {
    echo "Gagal Menghapus Data Mahasiswa !!!";
}
?>