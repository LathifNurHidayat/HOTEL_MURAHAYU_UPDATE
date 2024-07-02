<?php
// Memulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Menghapus semua data sesi
$_SESSION = [];

// Menghapus cookie sesi jika ada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman utama atau halaman login
$redirect_page = "../index.php"; // Ubah sesuai dengan halaman yang diinginkan
header("Location: $redirect_page");
exit();
?>