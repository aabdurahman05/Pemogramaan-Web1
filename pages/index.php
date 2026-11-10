<?php
require_once __DIR__ . "/../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <h1>Biodata</h1>
  <p>Isi dengan data dirimu</p>
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
  <h2>Biodata Mahasiswa</h2>
  <table class="data-table">
    <tr><th>Nama</th><td>Isi nama kamu</td></tr>
    <tr><th>NIM</th><td>Isi NIM kamu</td></tr>
    <tr><th>Program Studi</th><td>Isi program studi kamu</td></tr>
    <tr><th>Universitas</th><td>Horizon University Indonesia</td></tr>
  </table>
</section>
</main>
</body>
</html>
