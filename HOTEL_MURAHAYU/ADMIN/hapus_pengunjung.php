<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From login Where id='$id'");

header("location: pengunjung.php");
?>
        