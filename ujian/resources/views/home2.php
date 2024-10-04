<?php
session_start();

if (!isset($_SESSION['user_nama'], $_SESSION['user_username'], $_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

$nama = $_SESSION['user_nama'];
$username = $_SESSION['user_username'];
$email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke CSS -->
</head>
<body>
    <!-- Header dengan Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">MyWebApp</div>
            <ul class="nav-links">
                <li><a href="home2.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="burger-menu" id="burger-menu">&#9776;</div>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <section id="home">
            <h1>Selamat datang, <?php echo htmlspecialchars($nama); ?>!</h1>
            <p>Di halaman ini, web test.</p><br><br><br>
        </section>

        <section id="portfolio" class="profile-card">
            <h2>Portofolio</h2>
            <p>Berikut adalah proyek-proyek Anda:</p>
            <ul>
                <li>Proyek 1: Flutter</li>
                <li>Proyek 2: Web profesional</li>
                <li>Proyek 3: Website Event dengan Pre-order Tiket</li>
            </ul>
        </section><br><br><br>

        <section id="about">
            <h2>about</h2>
            <p>contact us.</p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MyWebApp. All rights reserved.</p>
    </footer>

    <script src="script.js"></script> <!-- Link ke JS -->
</body>
</html>
