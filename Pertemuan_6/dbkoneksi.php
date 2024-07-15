<?php
$host = "localhost";
$db = "dbpuskesmas";
$user = "root";
$pass = "";
$charset = "utf8mb4"; // Tambahkan titik koma di akhir

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false // Tambahkan nilai boolean dan titik koma di akhir
]; // Tambahkan kurung penutup

// Contoh untuk membuat instance PDO
try {
    $pdo = new PDO($dsn, $user, $pass, $opt);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}