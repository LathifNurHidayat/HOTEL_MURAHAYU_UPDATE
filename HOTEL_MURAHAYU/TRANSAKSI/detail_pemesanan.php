<?php

include "../USER/koneksi.php"; //memanggil koneksi


// tampilkan detail pemesanan
if (isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];
    
    $query_detail = "SELECT * FROM pemesanan WHERE id = $id_pemesanan";
    $result_detail = mysqli_query($koneksi, $query_detail);
    
    if (mysqli_num_rows($result_detail) > 0) {
        $row = mysqli_fetch_assoc($result_detail);
        $no_ktp = $row['no_ktp'];
        $nama = $row['nama'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $tanggal_check_in = $row['tanggal_check_in'];
        $tanggal_check_out = $row['tanggal_check_out'];  
        $harga = $row['harga'];
        $status_konfirmasi = $row['status_konfirmasi'];
        
        echo "<h2>Detail Pemesanan</h2>";
        echo "<p>No. KTP: $no_ktp</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Tanggal Check-in: $tanggal_check_in</p>";
        echo "<p>Tanggal Check-out: $tanggal_check_out</p>";
        echo "<p>Harga: $harga</p>";
        echo "<p>Status Konfirmasi: $status_konfirmasi</p>";
        
        // tombol approve jka status belum diaprv
        if ($status_konfirmasi != 'Approved') {
            echo "<a href='approve.php?id=$id_pemesanan&action=approve'>Approve</a>";
        }
    } else {
        echo "Pemesanan tidak ditemukan.";
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
