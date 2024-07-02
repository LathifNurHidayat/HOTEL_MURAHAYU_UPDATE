<link rel="stylesheet" href="style_input.css">
<center>

<div class="utama">
<h3>Tambahkan Data Kamar</h3>
    <form method="post" action="input_aksi_kamar.php">
        <table>
            <tr>
                <td>Nomor Kamar</td>
                <td><input type="number" name="nomer"></td>
            </tr>
            <tr>
                <td><label for="jenis kamar">Jenis Kamar</label></td>

                <td> 
                <select name="jenis" id="jenis_kamar">
                    <option value="">Pilih Jenis Kamar</option>
                    <option value="Biasa">Biasa</option>
                    <option value="VIP">VIP</option>
                    <option value="President Class">President Class</option>
                </select>
                </td>
                
            </tr>
            <tr>
                <td><a href="kamar.php">kembali</a></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</div>