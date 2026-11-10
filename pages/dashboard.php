<?php
require_once __DIR__ . "/../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <h1>Dashboard</h1>
  <p>Web Programming 1</p>
</header>
<nav>
  <a href="../pages/dashboard.php">Dashboard</a>
  <a href="../pages/index.php">Biodata</a>
  <a href="../pages/layout.php">Layout Lab</a>
  <a href="../pages/data_mahasiswa.php">Data Mahasiswa</a>
  <a href="../pages/form_mahasiswa.php">Tambah Mahasiswa</a>
  <a href="../crud/index.php">CRUD Mahasiswa</a>
  <a href="../crud-media/index.php">CRUD Media</a>
  <a href="../proses/logout.php">Logout</a>
</nav>
<main>
<section>
  <h2>Halo, <?= htmlspecialchars($_SESSION["nama_lengkap"] ?? "User"); ?>!</h2>
  <p>Project ini berisi CRUD Mahasiswa (teks) dan CRUD Media (foto, audio, dokumen PDF).</p>
  <div class="cards">
    <div class="card"><h3>CRUD Mahasiswa</h3><p>Fitur lama dari sesi sebelumnya.</p><a class="btn" href="../crud/index.php">Buka</a></div>
    <div class="card"><h3>CRUD Media</h3><p>Fitur baru Sesi 10: upload file.</p><a class="btn" href="../crud-media/index.php">Buka</a></div>
  </div>
</section>
</main>
</body>
</html>
