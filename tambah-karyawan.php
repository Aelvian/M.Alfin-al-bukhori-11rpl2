<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Karyawan</title>
</head>
<body>
    <h3>Tambah Data Karyawan</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>NAMA KARYAWAN</td>
                <td><input type="text" name="nama_karyawan" required></td>
            </tr>
            <tr>
                <td>POSISI</td>
                <td><input type="text" name="posisi"></td>
            </tr>
            <tr>
                <td>GAJI</td>
                <td><input type="number" name="gaji"></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>