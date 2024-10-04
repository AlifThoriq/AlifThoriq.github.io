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
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header dengan Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">MyWebApp</div>
            <ul class="nav-links">
                <li><a href="home2.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="burger-menu" id="burger-menu">&#9776;</div>
        </nav>
    </header>

    <!-- Konten Profil -->
    <main>
        <section id="profile" class="profile-card">
            <h2>Profil Anda</h2>
            <ul>
                <li>Nama: <?php echo htmlspecialchars($nama); ?></li>
                <li>Username: <?php echo htmlspecialchars($username); ?></li>
                <li>Email: <?php echo htmlspecialchars($email); ?></li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 MyWebApp. All rights reserved.</p>
    </footer>
</body>
</html>
