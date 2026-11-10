<?php
// Hapus data dari CRUD Mahasiswa lama.
// Ditambah cleanup file media (kalau record punya media) supaya tidak ada orphan file.
require_once __DIR__ . "/../config/auth.php";
require_once __DIR__ . "/../config/koneksi.php";
require_once __DIR__ . "/../config/media_helper.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../crud/index.php");
    exit;
}

$id = (int) ($_POST["id"] ?? 0);
if ($id <= 0) {
    die("ID tidak valid.");
}

$stmtSelect = $conn->prepare("SELECT foto, audio, dokumen FROM mahasiswa WHERE id = ? LIMIT 1");
$stmtSelect->bind_param("i", $id);
$stmtSelect->execute();
$data = $stmtSelect->get_result()->fetch_assoc();
$stmtSelect->close();

$stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
$stmt->bind_param("i", $id);

if (!$stmt->execute()) {
    die("Data gagal dihapus.");
}
$stmt->close();
$conn->close();

if ($data) {
    $root = __DIR__ . "/../uploads";
    hapusMediaJikaAda($data["foto"], $root . "/images");
    hapusMediaJikaAda($data["audio"], $root . "/audio");
    hapusMediaJikaAda($data["dokumen"], $root . "/documents");
}

header("Location: ../crud/index.php?status=hapus");
exit;
