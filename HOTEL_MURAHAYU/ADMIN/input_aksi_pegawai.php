<?php
include 'koneksi.php';

$ID  = $_POST['id_pegawai'];
$NAMA = $_POST['nama'];
$ALAMAT = $_POST['alamat'];
$GENDER = $_POST['gender'];

mysqli_query($koneksi,"insert into pegawai values('$ID', '$NAMA' , '$ALAMAT' , '$GENDER')");
header("location:pegawai.php");
?>
