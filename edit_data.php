<!-- Untuk edit data mahasiswa -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form edit data mahasiswa</title>
    </head>

    <body>
        <h3>Edit Data Mahasiswa</h3>
        <?php
    include "koneksi.php";
    $editData = mysqli_query($connect, "SELECT * FROM datagiro WHERE nogiro='$_GET[nogiro]'");
    $d = mysqli_fetch_array($editData);
    ?>
          <table>
                <tr>
                    <td>Nomor Giro</td>
                    <td><input type="text" name="nogiro" size="18"></td>
                </tr>
                <tr>
                    <td>Nama PT Penerbit Giro</td>
                    <td><input type="text" name="nmptpenerbit" size="18"></td>
                </tr>
                <tr>
                    <td>Nama Bank</td>
                    <td><input type="text" name="nmbank" size="18"></td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td><input type="text" name="nominal" size="18"></td>
                </tr>
                <tr>
                    <td>Account Number</td>
                    <td><input type="text" name="acnum" size="18"></td>
                </tr>
                <tr>
                <tr>
                    <td>Tanggal Giro</td>
                    <td><input type="date" name="tglgiro" size="18"></td>
                </tr>
                <tr>
                    <td>Tanggal Jatuh Tempo</td>
                    <td><input type="date" name="tgltempo" size="18"></td>
                </tr>
                <tr>
                    <td>Penerima Giro</td>
                    <td><input type="text" name="penerimagiro" size="18"></td>
                </tr>
                <tr>
                    <td>Nomor Rekening</td>
                    <td><input type="text" name="nomorrek" size="18"></td>
                </tr>
                <tr>
                    <td>Bank Penerima</td>
                    <td><input type="text" name="bankpenerima" size="18"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="keterangan" size="18"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Simpan" size="18"></td>
                </tr>
            </table>
        </form>

        <?php
    include "koneksi.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $simpan = mysqli_query($connect, "INSERT INTO datagiro(nogiro, nmptpenerbit, nmbank, nominal, acnum, tglgiro, tgltempo, penerimagiro, nomorrek, bankpenerima, keterangan)
                    VALUES('$_POST[nogiro]', '$_POST[nmptpenerbit]', '$_POST[nmbank]', '$_POST[nominal]', '$_POST[acnum]', '$_POST[tglgiro]', '$_POST[tgltempo]', '$_POST[penerimagiro]', '$_POST[nomorrek]', '$_POST[bankpenerima]', '$_POST[keterangan]')");
        if ($simpan) {
            header('location:data_giro.php');
            echo "Gagal Menyimpan Data Mahasiswa !!!";
        }
    }
    ?>
    </body>

</html>