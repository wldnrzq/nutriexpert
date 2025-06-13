<?php

$host = "localhost"; // Server database
$user = "root";      // Username MySQL (default XAMPP: root)
$pass = "";          // Password MySQL (default XAMPP: kosong)
$db   = "sistem_pakar_skizofrenia"; // Nama database

// Koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
