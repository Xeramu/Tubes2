<?php
$menuItems = [
    [
        'title' => 'Beranda',
        'icon' => '🏠',
        'link' => 'index.php',
        'description' => 'Kembali ke halaman utama',
        'color' => '#FF6B6B'
    ],
    [
        'title' => 'Rental',
        'icon' => '🚗',
        'link' => 'rental.php',
        'description' => 'Lihat daftar mobil yang tersedia',
        'color' => '#4ECDC4'
    ],
    [
        'title' => 'Detail Rental',
        'icon' => '📋',
        'link' => 'detail-rental.php',
        'description' => 'Lihat detail pemesanan Anda',
        'color' => '#45B7D1'
    ],
    [
        'title' => 'Pembayaran',
        'icon' => '💳',
        'link' => 'pembayaran.php',
        'description' => 'Lakukan pembayaran',
        'color' => '#FFA502'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil - Beranda</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <h1>🚗 Rental Mobil</h1>
            </div>
            <nav class="navbar">
                <?php foreach ($menuItems as $item): ?>
                    <a href="<?php echo $item['link']; ?>" class="nav-link">
                        <?php echo $item['title']; ?>
                    </a>
                <?php endforeach; ?>
            </nav>
            <div class="header-right">
                <button class="btn-login">Masuk</button>
                <button class="btn-user">👤</button>
            </div>
        </div>
    </header>

    <main class="main-content">
        <section class="hero">
            <h2>Sewa Mobil Impian Anda</h2>
            <p>Perjalanan dimulai dari sini - Nikmati kenyamanan berkendara dengan armada terpercaya kami</p>
        </section>

        <section class="menu-section">
            <h2 class="section-title">Mulai Perjalanan Anda</h2>
            <div class="menu-grid">
                <?php foreach ($menuItems as $item): ?>
                    <a href="<?php echo $item['link']; ?>" class="menu-card-link">
                        <div class="menu-card" style="--card-color: <?php echo $item['color']; ?>">
                            <div class="card-icon"><?php echo $item['icon']; ?></div>
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['description']; ?></p>
                            <div class="card-arrow">→</div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Rental Mobil. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
