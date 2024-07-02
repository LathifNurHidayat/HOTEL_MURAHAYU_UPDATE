<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From pemesanan Where id='$id'");

header("location: pemesanan.php");
?>
 