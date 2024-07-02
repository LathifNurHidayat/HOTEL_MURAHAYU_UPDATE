<?php
include 'koneksi.php';

$NOMOR= $_POST['nomor_kamar'];
$JENIS = $_POST['jenis_kamar'];

mysqli_query($koneksi,"insert into kamar values('','$NOMOR' , '$JENIS')");
header("location:kamar.php");
?>
