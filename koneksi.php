<?php 
$server = "localhost";

$user ="root";

$password="";

$nama_database = "human_resource";

$db =  mysqli_connect($server, $user, $password, $nama_database);

if ( !$db ) {
die("gagal terhubung". mysqli_connect_error());

}
?>