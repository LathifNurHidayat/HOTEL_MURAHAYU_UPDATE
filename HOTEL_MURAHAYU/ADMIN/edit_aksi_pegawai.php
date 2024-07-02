<?php
include "koneksi.php";

$ID= $_POST['ID'];
$NAMA = $_POST['NAMA'];
$ALAMAT = $_POST['ALAMAT'];
$GENDER = $_POST['GENDER'];

mysqli_query ($koneksi, "UPDATE pegawai SET  id_pegawai='$ID' , nama='$NAMA' , alamat='$ALAMAT' , gender='$GENDER'  WHERE id_pegawai='$ID'");
header("location:pegawai.php");
?>