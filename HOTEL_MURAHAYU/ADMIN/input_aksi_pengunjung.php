<?php
include 'koneksi.php';

$NAMA = $_POST['nama'];
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];

mysqli_query($koneksi,"insert into login values('', '$NAMA' , '$EMAIL' , '$PASSWORD','user')");
header("location:pengunjung.php");
?>
