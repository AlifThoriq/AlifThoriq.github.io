<?php
session_start(); // Mulai sesi
session_destroy(); // Hancurkan semua sesi

header("Location: login.php"); // Redirect ke halaman login
exit();
?>
