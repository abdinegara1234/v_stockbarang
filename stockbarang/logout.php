<?php
session_start();
session_destroy();
header('Location: login.php');
exit(); // Menambahkan exit agar header berfungsi dengan benar
?>
