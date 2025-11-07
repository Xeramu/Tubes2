<?php
$menuItems = [
    [
        'title' => 'Beranda',
        'icon' => '🏠',
        'link' => 'home.php',
        'description' => 'Kembali ke halaman utama',
        'color' => '#7AB2D3'
    ],
    [
        'title' => 'Cari Teman',
        'icon' => '👥',
        'link' => 'find-dekstop.php',
        'description' => 'Temukan teman pemancingan',
        'color' => '#4A628A'
    ],
    [
        'title' => 'Tempat Pemancingan',
        'icon' => '🗺️',
        'link' => 'spot-deks.php',
        'description' => 'Lihat lokasi pemancingan terbaik',
        'color' => '#7AB2D3'
    ],
    [
        'title' => 'Detail Pemancingan',
        'icon' => '🎣',
        'link' => 'detailspot.php',
        'description' => 'Detail informasi tempat pemancingan',
        'color' => '#4A628A'
    ],
    [
        'title' => 'Rental',
        'icon' => '🚤',
        'link' => 'rental.php',
        'description' => 'Sewa peralatan dan kendaraan',
        'color' => '#7AB2D3'
    ],
    [
        'title' => 'Detail Rental',
        'icon' => '📋',
        'link' => 'detailrental2.php',
        'description' => 'Lihat detail pemesanan rental Anda',
        'color' => '#4A628A'
    ],
    [
        'title' => 'Detail Pemesanan',
        'icon' => '📝',
        'link' => 'detailpemesananweb.php',
        'description' => 'Kelola detail pemesanan',
        'color' => '#7AB2D3'
    ],
    [
        'title' => 'Pembayaran',
        'icon' => '💳',
        'link' => 'detailpemesananweb.php',
        'description' => 'Lakukan pembayaran',
        'color' => '#333A7F'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolam Biru - Beranda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <h1>🎣 Kolam Biru</h1>
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
            <h2>Petualangan Pemancingan Menanti Anda</h2>
            <p>Jelajahi lokasi pemancingan terbaik, temukan teman seperjuangan, dan ciptakan kenangan indah bersama</p>
        </section>

        <section class="menu-section">
            <h2 class="section-title">Mulai Petualangan Pemancingan</h2>
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
        <p>&copy; 2025 Kolam Biru. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
