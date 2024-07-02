<link rel="stylesheet" href="style_input.css">
<center>

<div class="utama">
<h3>Tambahkan Data Pegawai</h3>
    <form method="post" action="input_aksi_pegawai.php">
        <table>
            <tr>
                <td>Id Pegawai</td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender_">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
            </td>
            </tr>
            <tr>
                <td><a href="pegawai.php">kembali</a></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</div>