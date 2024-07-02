<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From pegawai Where id_pegawai='$id'");

header("location: pegawai.php");
?>
 