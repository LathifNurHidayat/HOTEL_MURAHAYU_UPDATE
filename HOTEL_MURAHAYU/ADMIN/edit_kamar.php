<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Kamar</h3>

<?php
include 'koneksi.php';
$nomor_kamar= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE nomor_kamar='$nomor_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_kamar.php">
<table>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="number" name="nomor_kamar" value="<?php echo $tampil['nomor_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis kamar</td>
        <td>
        <select name="jenis_kamar" id="jenis_kamar">
                    <option value="">Pilih Jenis Kamar</option>
                    <option value="VIP">VIP</option>
                    <option value="VVIP">VVIP</option>
                    <option value="Biasa">Biasa</option>
                    <option value="Menengah">Menengah</option>
        </select>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>
<>