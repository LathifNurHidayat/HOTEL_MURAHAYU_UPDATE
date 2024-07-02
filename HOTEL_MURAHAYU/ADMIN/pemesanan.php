<!DOCTYPE html>
<html>
<head></head>
	<title>Hotel Murahayu</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <style>
        h2 {
            color: white;
        }
    table {
        border-collapse: collapse;
        width: 90%;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: wheat ;
    }

    tr{
        background-color: blanchedalmond;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }
</style>

</head>
<body>
<div class="main">
	<div class="navbar">
		<label class="logo">Hotel Murahayu</label>
		<ul>
			<li><a href="home.html">Home</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
			<li><a href="pemesanan.php">Pemesanan</a></li>
            <li><a href="../LOGIN_USER/Logout.php">Logout</a></li>
		</ul>
	</div>

<div>
        <center>

	<h2>Pemesanan Pelanggan</h2><br>
    <table border= "1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Jenis Kamar</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"Select * from pemesanan");
        while($tampil=mysqli_fetch_array($data)){   //syntak html berada di dalam php
    ?>

    <tr>
        <td> <?php echo $tampil['id'] ?> </td>
        <td> <?php echo $tampil['nama'] ?> </td>     
        <td> <?php echo $tampil['email'] ?> </td>     
        <td> <?php echo $tampil['check_in'] ?> </td>     
        <td> <?php echo $tampil['check_out'] ?> </td>     
        <td> <?php echo $tampil['jenis_kamar'] ?> </td>      
        <td> <?php echo $tampil['total_biaya'] ?> </td>
        <td> <?php echo $tampil['status_konfirmasi'] ?> </td>

        <td class="tombol">
         <a href="hapus_pemesanan.php?id=<?php echo $tampil['id'] ?>" >Hapus</a>
         <a href="edit_pemesanan.php?id=<?php echo $tampil['id'] ?>" >Edit</a>
         <a href="TRANSAKSI/approve.php?id=<?php echo $tampil['id'] ?>" onclick="konfirmasi()">Konfirmasi</a>
         <script> 
            function konfirmasi() {
                alert('Anda yakin akan mengkonfirmasi ?');
            }
        
        </script>
        </td>
    </tr>

    <?php 
        }
    ?>
    </table>
  
	</div>
</div>
</body>
</html>


