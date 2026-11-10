<?php
// Dipakai di semua halaman yang butuh login.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION["user_id"])) {
    // Hitung URL root project dari posisi folder config/ (aman untuk semua level folder)
    $docRoot = str_replace("\\", "/", realpath($_SERVER["DOCUMENT_ROOT"]));
    $projRoot = str_replace("\\", "/", realpath(__DIR__ . "/.."));
    $base = substr($projRoot, strlen($docRoot));
    header("Location: " . $base . "/pages/login.php");
    exit;
}
