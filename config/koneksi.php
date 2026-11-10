<?php
// Konfigurasi default Laragon: user root, password kosong.
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "web_programming_1";

mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . htmlspecialchars($conn->connect_error));
}
$conn->set_charset("utf8mb4");
