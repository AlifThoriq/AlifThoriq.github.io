<?php
include '../../config/database.php'; // Sertakan file konfigurasi database

session_start(); // Mulai sesi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifier = $_POST['username_email']; // Mengubah menjadi 'username_email' sesuai dengan nama input form
    $password = $_POST['password'];

    // Siapkan query untuk mencari pengguna berdasarkan username atau email
    $query = "SELECT * FROM users2 WHERE username = ? OR email = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        // Bind parameter
        $stmt->bind_param("ss", $identifier, $identifier);
        $stmt->execute();

        // Ambil hasil query
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Cek apakah pengguna ditemukan
        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Simpan data pengguna dalam sesi
                $_SESSION['user_nama'] = $user['nama'];
                $_SESSION['user_username'] = $user['username'];
                $_SESSION['user_email'] = $user['email'];

                // Redirect ke halaman home2.php
                header("Location: home2.php");
                exit();
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Pengguna tidak ditemukan.";
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="styles.css"> <!-- Link ke CSS -->
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST" class="form">
            <label for="username_email">Username atau Email:</label>
            <input type="text" name="username_email" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <button type="submit">Login</button>
            <button class="primary-button sign-in-button">
                <i class="fab fa-google icon"></i>
                <span>Login with Google</span>
            </button>
            <p>Don't have an account? <a href="register.php">Sign up now</a></p>
        </form>
    </div>
    <script src="script.js"></script> <!-- Link ke JS -->
</body>
</html>
