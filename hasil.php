<?php
session_start();
$pendaftar = $_SESSION['pendaftar'] ?? [];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ringkasan Pendaftar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="summary-container">
        <h2>Daftar Pendaftar</h2>

        <?php if (empty($pendaftar)): ?>
            <p class="no-data">Belum ada pendaftar.</p>
        <?php else: ?>
            <ul class="pendaftar-list">
                <?php foreach ($pendaftar as $data): ?>
                    <li>
                        <strong><?= htmlspecialchars($data['nama']) ?></strong><br>
                        Email: <?= htmlspecialchars($data['email']) ?><br>
                        Tanggal Lahir: <?= htmlspecialchars($data['tanggal_lahir']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="index.html" class="back-button">⬅ Kembali ke Form</a>
    </div>
</body>

</html>