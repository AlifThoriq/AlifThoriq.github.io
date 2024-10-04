<?php
$servername = "localhost"; // Ganti jika perlu
$username = "root"; // Username database Anda
$password = ""; // Password database Anda
$dbname = "mvc_project"; // Nama database Anda

// Buat koneksi
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
