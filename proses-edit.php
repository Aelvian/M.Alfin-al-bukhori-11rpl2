<?php
session_start();
include("koneksi.php");

if(isset($_POST['simpan'])) {
    $id_karyawan = $_POST['id'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $sql = "UPDATE tb_karyawan SET
    nama_karyawan='$nama_karyawan',
    posisi='$posisi',
    gaji='$gaji'
    WHERE id_karyawan = $id_karyawan";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['nontifikasi'] = "Data Karyawan berhasil DiUpdate";
} else {
$_SESSION['nontifikasi'] = "data Karyawan gagal diUpdate";
}
header('location: index.php');
} else {
    die("akses ditolak");
}
?>