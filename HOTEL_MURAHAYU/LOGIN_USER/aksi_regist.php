<?php
      require_once 'koneksi.php'; // Koneksi ke database


      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir pendaftaran.
         * Data: Email, Kata Sandi, Nama Lengkap, dan NIM.
         */
 
        $nama = strip_tags($_POST['nama']);
        $email     = strip_tags($_POST['email']);
        $password      = strip_tags($_POST['password']);

        if(empty($nama) || empty($email) || empty($password)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo "<b>Warning!</b> Silahkan isi data yang diperlukan.";
        } else if(count((array) $koneksi->query('SELECT email FROM login WHERE email = "'.$email.'"')->fetch_array()) > 1) {
          /**
           * Cek jika email atau NIM telah terdaftar.
           */
          echo '<b>Warning!</b> Email atau NIM telah terdaftar.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $insert = $koneksi->query('INSERT INTO login VALUES("'. '","'.$nama.'", "'.$email.'", "'.$password.'","user")');
          if($insert) {
            echo 'Pendaftaran berhasil!';
            header('location:login.php');

          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>
    