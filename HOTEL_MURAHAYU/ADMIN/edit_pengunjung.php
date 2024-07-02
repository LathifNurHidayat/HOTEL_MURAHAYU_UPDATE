<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Pengunjung</h3>

<?php
include 'koneksi.php';
$PENGUNJUNG= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM login WHERE id='$PENGUNJUNG'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pengunjung.php">
<table>
   
    <tr>
        <td>Nama</td>
        <td><input type="text" name="NAMA" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="EMAIL" value="<?php echo $tampil['email']; ?>"></td>
    </tr>
    <tr>
    <td>Password</td>
        <td><input type="text" name="PASSWORD" value="<?php echo $tampil['password']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>
</div>