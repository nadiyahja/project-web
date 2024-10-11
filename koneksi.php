<?php
$servername = "localhost";
$username = "root";
$password = "pertemuan2nadiyah"

$conn = new mysqli($servername,$username,$database);

if ($conn->connect_error) {
    die("koneksi gagal:" . $conn->connect_error);
}
?>