<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db   = 'penjualan';
$koneksi = new mysqli($host, $user, $pass, $db);
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
//echo "<h2 style='color: green;'>Koneksi Database Berhasil!</h2>";
//echo "Database: " . $db;
?>