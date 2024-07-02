<?php
session_start(); // Memulai sesi
include 'koneksi.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Melakukan parameterized query untuk menghindari SQL injection
    $login = mysqli_prepare($koneksi, "SELECT * FROM login WHERE email=? AND password=?");
    mysqli_stmt_bind_param($login, "ss", $email, $password);
    mysqli_stmt_execute($login);

    // Mengambil hasil query
    $result = mysqli_stmt_get_result($login);

    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($result);     
    

    // Cek apakah email dan password ditemukan pada database
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($result);

        // Cek jika user login sebagai admin
        if ($data['level'] == "admin") {
            // Buat session login dan level
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "admin";
            // Alihkan ke halaman dashboard admin hotel
            header("location:../ADMIN/home.html");
        } elseif ($data['level'] == "user") {
            // Buat session login dan level
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "user";
            // Alihkan ke halaman dashboard user
            header("location:../USER/index.php");
        } else {
            // Alihkan ke halaman login kembali
            header("location:login.php?pesan=gagal");
        }
      }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_login_user.css">
    <title>Login</title>
    <script>
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
            window.onunload=function(){null;}
    </script>

</head>
<body>

<div class="kotak_login">
    <center>
        <form method="POST">
            <center><h2>LOGIN</h2></center>
            <br>
            <input type="email" name="email" value="" autocomplete="off" placeholder="Email" required>
            <br/>
            <input type="password" name="password" value="" autocomplete="off" placeholder="Kata sandi" required>
            <br/>
            <input type="submit" name="submit" value="Login">
            <br>
            <p>Belum punya akun ? <a href="register.php">Daftar</a></p>
        </form>
    </center>
</div>

</body>
</html>
