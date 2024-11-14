<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['log'])) {
    // Redirect ke halaman login jika belum login
    header('Location: login.php');
    exit(); // Tambahkan exit agar header berfungsi dengan benar
}
?>
