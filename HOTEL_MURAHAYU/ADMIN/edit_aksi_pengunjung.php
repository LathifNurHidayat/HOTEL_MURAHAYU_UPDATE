<?php
include "koneksi.php";

$NIK= $_POST['NIK'];
$NAMA = $_POST['NAMA'];
$EMAIL = $_POST['EMAIL'];
$PASSWORD = $_POST['PASSWORD'];

mysqli_query ($koneksi, "UPDATE login SET  nik='$NIK' , nama='$NAMA' , email='$EMAIL' , password='$PASSWORD'  WHERE nik='$NIK'");
header("location:pengunjung.php");
?>