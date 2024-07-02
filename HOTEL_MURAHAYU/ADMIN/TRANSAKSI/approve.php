<?php
include '../koneksi.php';

if(isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];

    $query_update = "UPDATE pemesanan SET status_konfirmasi='Dikonfirmasi' WHERE id = '$id_pemesanan'";
    $result_update = mysqli_query($koneksi, $query_update);

    if($result_update) {
        $query_select = "SELECT * FROM pemesanan WHERE id = '$id_pemesanan'";
        $result_select = mysqli_query($koneksi, $query_select);

        if(mysqli_num_rows($result_select) > 0) {
            $row = mysqli_fetch_assoc($result_select);

            $id = $row['id'];
            $nama = $row['nama'];
            $jenis_kamar = $row['jenis_kamar'];
            $check_in = $row['check_in'];
            $check_out = $row['check_out'];
            $total_biaya = $row['total_biaya'];

            $query_insert = "INSERT INTO transaksi (id , nama, jenis_kamar, check_in, check_out, total_biaya, status_pembayaran)
                             VALUES ('$id', '$nama', '$jenis_kamar', '$check_in', '$check_out', '$total_biaya','Belum Bayar')";
            $result_insert = mysqli_query($koneksi, $query_insert);

            if($result_insert) {
                header("location:../pemesanan.php");
                exit();
            } else {
                echo "Terjadi kesalahan saat memindahkan data pemesanan ke tabel transaksi.";
            }
        } else {
            echo "Data pemesanan tidak ditemukan.";
        }
    } else {
        echo "Terjadi kesalahan saat memperbarui status konfirmasi.";
    }
} else {
    echo "Parameter id tidak tersedia.";
}
?>
