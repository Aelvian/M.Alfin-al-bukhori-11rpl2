<?php
session_start();
include("koneksi.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_karyawan WHERE id_karyawan=$id";
    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['nontifikasi'] = "data karyawan berhasil dihapus";

    } else {
        $_SESSION['nontfikasi'] = "data karyawan gagal dihapus";
}

header('Location: index.php');
}else{
    die("akses ditolak");
}
?>