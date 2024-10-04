<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="burger-menu" id="burger-menu">&#9776;</div>
        </nav>
    </header>

    <main>
        <section id="contact" class="profile-card">
            <h2>Kontak Kami</h2>
            <form action="send_message.php" method="POST">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Kirim Pesan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 MyWebApp. All rights reserved.</p>
    </footer>
</body>
</html>
