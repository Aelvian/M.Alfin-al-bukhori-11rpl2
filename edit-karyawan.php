<?php
include("koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM tb_karyawan WHERE id_karyawan ='$id'");
$karyawan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit karyawan</title>
</head>
<body>
    <h3>Edit karyawan</h3>
    <form action="proses-edit.php" method="POST">
       <input type="hidden" name="id" value="<?php echo $karyawan ['id_karyawan']?>">
        <table border="0">
            
            <tr>
                <td>NAMA KARYAWAN</td>
                <td>
                   <input type="text" name="nama_karyawan"
                   value="<?php echo $karyawan['nama_karyawan'] ?>"> 
                </td>
            </tr>
            <tr>
                <td>POSISI</td>
                <td>
                   <input type="text" name="posisi"
                   value="<?php echo $karyawan['posisi'] ?>"> 
                </td>
            </tr>
            <tr>
                <td>GAJI</td>
                <td>
                   <input type="number" name="gaji"
                   value="<?php echo $karyawan['gaji'] ?>"> 
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">SIMPAN</button>
    </form>
</body>
</html>