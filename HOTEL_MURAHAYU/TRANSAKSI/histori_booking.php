<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../USER/style.css" />
    <link rel="stylesheet" href="style_histori.css">
    <title>Hotel Murahayu</title>

</head>
<body>
    <nav>
        <div class="nav__bar">
            <div class="nav__header">
                <div class="logo nav__logo">
                    <div>H</div>
                    <span>HOTEL<br>MURAHAYU</span>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="../USER/index.php" >Kembali Ke Home</a></li>
            </ul>
        </div>
    </nav>


    <header class="header2" id="home">
    <center>
   
<?php

session_start();
         include "../USER/koneksi.php";



if (isset($_SESSION['email'])) {
    // ambil emaill pnggna dari sesi
    $user_email = $_SESSION['email']; 

    $query_histori = "SELECT * FROM pemesanan WHERE email = '$user_email'";
    $result_histori = mysqli_query($koneksi, $query_histori); 


if (mysqli_num_rows($result_histori) > 0) { 
    echo "<h2>Histori Booking</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Tanggal Check-in</th><th>Tanggal Check-out</th><th>Jenis Kamar</th><th>Harga</th><th>Status Konfirmasi</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result_histori)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['check_in']."</td>";
        echo "<td>".$row['check_out']."</td>";
        echo "<td>".$row['jenis_kamar']."</td>";
        echo "<td>".$row['total_biaya']."</td>";
        echo "<td>".$row['status_konfirmasi']."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Belum ada histori booking.";
}
} else {
    
    header("Location: ../login.php"); 
    exit();

}
?>


</header>


</body>
</html>