<?php
//$server="localhost";
//$username="root";
//$password="";
//$database="hotel";

//$koneksi=mysqli_connect($server,$username,$password,$database);

$koneksi = mysqli_connect("localhost","root","","hotel");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>