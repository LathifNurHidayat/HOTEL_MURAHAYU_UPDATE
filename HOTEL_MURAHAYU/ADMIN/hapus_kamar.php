<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From kamar Where nomor_kamar='$id'");

header("location: kamar.php");
?>
 