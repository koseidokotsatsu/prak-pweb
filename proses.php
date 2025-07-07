<?php
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$persetujuan = isset($_POST['persetujuan']);

$data = [
    'nama' => $nama,
    'email' => $email,
    'tanggal_lahir' => $tanggal_lahir,
];

$_SESSION['pendaftar'][] = $data;

// Redirect ke hasil
header("Location: hasil.php");
exit;
