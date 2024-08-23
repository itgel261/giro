<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Giro</title>
    </head>

    <body>
        <h3>Data-Data GIRO yang berhasil di Simpan</h3>
        <a href="index.php">Tambah GIRO Mahasiswa</a>
        <table border="1" cellspacing="0" width="50%">
            <tr>
                <th>No.</th>
                <th>No Giro</th>
                <th>Nama PT Penerbit Giro</th>
                <th>Nama Bank</th>
                <th>Nominal</th>
                <th>Account Number</th>
                <th>Tanggal Giro</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Penerima Giro</th>
                <th>Nomor Rekening</th>
                <th>Bank Penerima</th>
                <th>Keterangan</th>
                <th>Option</th>
            </tr>
            <?php
        include "koneksi.php";
        $No = 1;
        $sqlMhs = mysqli_query($connect, "SELECT * FROM datagiro ORDER BY nogiro ASC");
        while ($a = mysqli_fetch_array($sqlMhs)) {
            echo "<tr>
                            <td align='center'>$No</td>
                            <td>$a[nogiro]</td>
                            <td>$a[nmptpenerbit]</td>
                            <td>$a[nmbank]</td>
                            <td>$a[nominal]</td>
                            <td>$a[acnum]</td>
                            <td>$a[tglgiro]</td>
                            <td>$a[tgltempo]</td>
                            <td>$a[penerimagiro]</td>
                            <td>$a[nomorrek]</td>
                            <td>$a[bankpenerima]</td>
                            <td>$a[keterangan]</td>
                            <td align='center'>
                                <a href='edit_mhs.php?nim=$a[nogiro]'>Edit</a> | 
                                <a href='hapus_mhs.php?nim=$a[nogiro]'>Hapus</a>
                            </td>
                        </tr>";
            $No++;
        }
        ?>
        </table>
    </body>

</html>