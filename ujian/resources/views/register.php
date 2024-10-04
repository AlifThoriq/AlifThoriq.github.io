<?php
// Sertakan file konfigurasi database
include '../../config/database.php'; // Sesuaikan path dengan struktur direktori Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Pastikan untuk mengenkripsi password sebelum menyimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Siapkan query untuk memasukkan data ke tabel users
    $query = "INSERT INTO users2 (nama, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // Bind parameter untuk menghindari SQL injection
        $stmt->bind_param("ssss", $nama, $username, $email, $hashed_password);

        // Eksekusi query dan cek apakah berhasil
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            echo "Registrasi gagal: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Terjadi kesalahan dalam menyiapkan query: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke CSS -->
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="" method="POST" class="form">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br>
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <button type="submit">Register</button>
            <button class="primary-button sign-in-button">
    <i class="fab fa-google icon"></i>
    <span>Register with Google</span>
</button>
<p>Have already an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <script src="script.js"></script> <!-- Link ke JS -->
</body>
</html>
