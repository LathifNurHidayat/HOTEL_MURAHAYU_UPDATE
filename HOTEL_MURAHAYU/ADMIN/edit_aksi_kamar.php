<?php
include "koneksi.php";

$NOMOR= $_POST['nomor_kamar'];
$JENIS = $_POST['jenis_kamar'];


mysqli_query ($koneksi, "UPDATE kamar SET  nomor_kamar='$NOMOR' , jenis_kamar='$JENIS' WHERE nomor_kamar='$NOMOR'");
header("location:kamar.php");
?>