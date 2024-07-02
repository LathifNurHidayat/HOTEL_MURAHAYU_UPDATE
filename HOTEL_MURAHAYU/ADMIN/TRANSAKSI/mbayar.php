<?php
include '../koneksi.php';
$id_transaksi = $_GET['id_transaksi'];

$query = mysqli_query($koneksi,"SELECT p.email,t.id_transaksi,t.id,t.nama,t.jenis_kamar,t.check_in,t.check_out,t.total_biaya,t.status_pembayaran FROM transaksi t JOIN pemesanan p ON id_transaksi = '$id_transaksi'");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 10px;
    padding: 0;
}

.container {
    width: 60%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

p {
    font-size: 16px;
    color: #555;
}

form {
    margin-top: 20px;
}

label {
    font-size: 16px;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button, input[type="submit"] {
    display: inline-block;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}

button:hover, input[type="submit"]:hover {
    background-color: #45a049;
}

button a {
    color: white;
    text-decoration: none;
}

button a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
            <?php
            if($row=mysqli_fetch_assoc($query)){ ?>

            <p>ID Transaksi     : <?= $row['id_transaksi'];?></p>
            <p>ID Pemesanan     : <?= $row['id'];?></p>
            <p>Nama             : <?= $row['nama'];?></p>
            <p>Email            : <?= $row['email'];?></p>
            <p>Jenis Kamar      : <?= $row['jenis_kamar'];?></p>
            <p>Check In         : <?= $row['check_in'];?></p>
            <p>Check Out        : <?= $row['check_out'];?></p>
            <p>Total Biaya      : <?=$total_biaya = $row['total_biaya'];?></p>
            <p>Status Pembayaran: <?= $row['status_pembayaran'];?>
</p>

           <?php }
        ?>
<?php 
        if(isset($_POST['submit'])){
            $total_pembayaran = $_POST['total_pembayaran'];

             if(!is_numeric($total_pembayaran) || $total_pembayaran <= 0) {
        echo "<script> alert('Masukkan angka yang valid untuk total pembayaran.'); </script>";
    } elseif($total_pembayaran < $total_biaya) {
        echo "<script> alert('Nominal yang Anda masukkan kurang dari total biaya.'); </script>";
    } else {

        // Perubahan status pembayaran
        $query_update = "UPDATE transaksi SET status_pembayaran = 'Sudah Dibayar' WHERE id_transaksi = ?";
        $stmt = mysqli_prepare($koneksi, $query_update);
        mysqli_stmt_bind_param($stmt, 's', $id_transaksi);
        mysqli_stmt_execute($stmt);

        $kembalian = $total_pembayaran - $total_biaya;
        echo "<script> alert('Transaksi Berhasil. Kembalian Anda: $kembalian '); 
                                window.location.href = '../transaksi.php'; </script>";}
        }
?>

        <h2>Proses Pembayaran</h2>
        <form method="post">
            <label for="total_pembayaran">Masukan Nomial</label><br>
            <input type="text" name="total_pembayaran" required><br>
            <button><a href="../transaksi.php">Kembali</a></button>
            <input type="submit" name="submit" value="Bayar">
            
    </form>

    </table>
</body>
</html>