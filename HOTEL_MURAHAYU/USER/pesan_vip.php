<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_input.css">
    <title>Hotel Murahayu</title>

    <script>
            function hitungHarga() {
    var checkInValue = document.getElementById("check_in").value;
    var checkOutValue = document.getElementById("check_out").value;

    // Validasi apakah tanggal check-in dan check-out sudah diisi
    if (checkInValue && checkOutValue) {
        // Cek apakah format tanggal valid (YYYY-MM-DD)
        var checkInDate = new Date(checkInValue);
        var checkOutDate = new Date(checkOutValue);
        
        // Lakukan perhitungan harga jika format tanggal valid
        var hargaPerHari = 1500000; // Ganti dengan harga per hari yang sesuai
        var selisihHari = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24);
        var totalHarga = selisihHari * hargaPerHari;

        document.getElementById("total_harga").value = totalHarga;
    } else {
        
    }}

        function confirmPesan() {
            var checkIn = document.getElementById('check_in').value;
            var checkOut = document.getElementById('check_out').value;

            if (checkIn && checkOut) {
                var harga = (new Date(checkOut) - new Date(checkIn)) / (1000 * 60 * 60 * 24) * 1500000;
                var confirmPesan = confirm('Total Harga Yang Harus Anda Bayar : Rp ' + harga + '\nAnda yakin ingin melanjutkan pesanan?');
                if (confirmPesan) {
                    alert('Pesanan Sedang diproses admin');

                    return true;
                } else {
                    return false;
                }
            } else {
                alert('Silakan masukkan tanggal check-in dan check-out terlebih dahulu.');
                return false;
            }
        }
    </script>
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
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
    </nav>


    <header class="header" id="home">
    <center>
    
    <div class="utama">
    <h3>Masukan Data Pemesanan</h3>
        <form method="post" id="function_form" action="aksi_vip.php"  onsubmit="return confirmPesan()">
            <table>
                <tr>
                    <td>No KTP</td>
                    <td><input type="number" name="no_ktp"></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="
                            <?php 
                            session_start();
                            include "koneksi.php";
                             echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" readonly></td>
                </tr>

                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td>  
                    <select id="jenis" name="jenis_kelamin">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="P">P</option>
                        <option value="L">L</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Check In</td>
                    <td><input type="date" id="check_in" name="check_in" onchange="hitungHarga()"></td>
                </tr>
                
                <tr>
                    <td>Check Out</td>
                    <td><input type="date" id="check_out" name="check_out" onchange="hitungHarga()"></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td><input type="text" id="total_harga" name="total_harga" readonly></td>
                </tr>


  
                <tr>
                    <td><a class="kembali" href="index.php">kembali</a></td>        
                    <td><input  onclick="return pesan()" type="submit" value="Pesan"></td>

                    <
                </tr>
            </table>
        </form>
    </div>

</header>
                <script>
                         function pesan () {
                            var konfirmasi = confirm(Warning!Apakah data anda sudah benar?);
                            if (konfirmasi) {
                                document.getElementById("function_form").submit();
                            }
                            
                            return false; // Mengembalikan false agar form tdk langsung di-submit secra default
                        }
                </script>
                

</body>
</html>