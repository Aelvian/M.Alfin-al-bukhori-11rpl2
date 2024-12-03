<?php
include("koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data karyawan</h2>
    <?php if (isset($_SESSION['nontifikasi'])): ?>
       <p> <?php echo $_SESSION['nontifikasi']; ?> </p>
       <?php unset($_SESSION['nontifikasi']); ?>
   <?php endif; ?>
   <table>
    <thead>
        <tr align="center">
          <th>#</th>
          <th>NAMA KARYAWAN</th>
          <th>POSISI</th>
          <th>GAJI</th>
          <th><a href="tambah-karyawan.php">Tambah Data</a></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $query = $db->query("SELECT * FROM tb_karyawan");
        while ($karyawan = $query->fetch_assoc()) {
       ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $karyawan['nama_karyawan'] ?></td>
        <td><?php echo $karyawan['posisi'] ?></td>
        <td><?php echo $karyawan['gaji'] ?></td>
<td align="center">

<a href="edit-karyawan.php?id=<?php echo $karyawan['id_karyawan'] ?>">Edit</a>
<a onclik="return confirm('anda yakin ingin hapus data?')"
href="hapus-karyawan.php?id=<?php echo $karyawan['id_karyawan'] ?>">Hapus</a>
</td>
    </tr>
      <?php
      }
      ?>
    </tbody>
   </table>
   <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>