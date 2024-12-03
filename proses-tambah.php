<?php
session_start();
include("koneksi.php");

if(isset($_POST['simpan'])) {

   
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $sql = "INSERT INTO tb_karyawan
    ( nama_karyawan, 
    posisi, gaji)
    VALUES ( '$nama_karyawan', '$posisi',
    '$gaji')"; 

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['nontifikasi'] = "Data Karyawan berhasil Ditambahkan";
} else {
$_SESSION['nontifikasi'] = "data Karyawan gagal ditambakan";
}
header('location: index.php');
} else {
    die("akses ditolak");
}
?>