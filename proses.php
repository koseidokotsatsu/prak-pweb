<!-- // file: proses.php -->
<?php
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$persetujuan = isset($_POST['persetujuan']);

$errors = [];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid.";
}

if (strlen($password) < 6) {
    $errors[] = "Password minimal 6 karakter.";
}

if ($password !== $confirm_password) {
    $errors[] = "Konfirmasi password tidak cocok.";
}

if (!$persetujuan) {
    $errors[] = "Anda harus menyetujui syarat dan ketentuan.";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
    echo "<p><a href='register.html'>Kembali ke form</a></p>";
    exit;
}

// Simpan data ke array
$data = [
    'nama' => $nama,
    'email' => $email,
    'tanggal_lahir' => $tanggal_lahir,
];

$_SESSION['pendaftar'][] = $data;

// Redirect ke ringkasan
header("Location: ringkasan.php");
exit;
?>