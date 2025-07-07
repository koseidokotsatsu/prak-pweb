<!-- // file: ringkasan.php -->
<?php
session_start();
$pendaftar = $_SESSION['pendaftar'] ?? [];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ringkasan Pendaftar</title>
</head>

<body>
    <h2>Daftar Pendaftar</h2>
    <?php if (empty($pendaftar)): ?>
        <p>Belum ada pendaftar.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($pendaftar as $data): ?>
                <li>
                    <?= htmlspecialchars($data['nama']) ?> - <?= htmlspecialchars($data['email']) ?> - <?= htmlspecialchars($data['tanggal_lahir']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="register.html">Kembali ke Form</a>
</body>

</html>