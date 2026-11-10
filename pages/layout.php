<?php
require_once __DIR__ . "/../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layout Lab</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <h1>Layout Lab</h1>
  <p>Latihan layout CSS grid</p>
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
  <h2>Layout Lab</h2>
  <div class="layout-demo">
    <div>Kiri</div><div>Tengah</div><div>Kanan</div>
  </div>
</section>
</main>
</body>
</html>
