<?php
include 'koneksi.php';

$NO_KTP  = $_POST['no_ktp'];
$NAMA = $_POST['nama'];
$email = $_POST['email'];
$KELAMIN = $_POST['jenis_kelamin'];
$CEKIN = $_POST['check_in'];
$CEKOUT = $_POST['check_out'];
$TOTAL = $_POST['total_harga'];

mysqli_query($koneksi,"insert into pemesanan values('','$NO_KTP' , '$NAMA' , '$email' , '$KELAMIN' , '$CEKIN' , '$CEKOUT' , 'Kamar VIP' ,'$TOTAL','Menunggu')");
header("location:index.php");
?>

