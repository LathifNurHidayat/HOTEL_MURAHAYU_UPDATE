<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Pegawai</h3>

<?php
include 'koneksi.php';
$PEGAWAI= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$PEGAWAI'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pegawai.php">
<table>
    <tr>
        <td>ID Pegawai</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="NAMA" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="ALAMAT" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>
            <select name="GENDER" id="">
                <option value="L">L</option>
                <option value="P">P</option>
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

</div>