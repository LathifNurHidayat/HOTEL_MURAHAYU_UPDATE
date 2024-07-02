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

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: wheat;
    }

    tr {
        background-color: blanchedalmond;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }

    .button {
        display: inline-block;
        padding: 7px 11px;
        background-color: goldenrod;
        /* Warna latar belakang */
        color: white;
        /* Warna teks */
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        /* Sudut lengkung */
        cursor: pointer;
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

                <h2>Transaksi</h2><br>
                <table border="1">
                    <tr>
                        <th>Id Transaksi</th>
                        <th>Id pemesanan</th>
                        <th>Nama</th>
                        <th>Jenis Kamar</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Total Harga</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "Select * from transaksi");
                    while ($tampil = mysqli_fetch_array($data)) {   //syntak html berada di dalam php
                        ?>

                        <tr>
                            <td> <?php echo $tampil['id_transaksi'] ?> </td>
                            <td> <?php echo $tampil['id'] ?> </td>
                            <td> <?php echo $tampil['nama'] ?> </td>
                            <td> <?php echo $tampil['jenis_kamar'] ?> </td>
                            <td> <?php echo $tampil['check_in'] ?> </td>
                            <td> <?php echo $tampil['check_out'] ?> </td>
                            <td> <?php echo $tampil['total_biaya'] ?> </td>
                            <td> <?php echo $tampil['status_pembayaran'] ?> </td>
                            <td class="button"><a
                                    href="TRANSAKSI/mbayar.php?id_transaksi=<?php echo $tampil['id_transaksi'] ?>">Pembayaran</a>
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