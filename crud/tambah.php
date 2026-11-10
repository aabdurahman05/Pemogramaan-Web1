<?php
require_once __DIR__ . "/../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <h1>Tambah Mahasiswa</h1>
  <p>CRUD Mahasiswa (teks)</p>
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
  <form class="crud-form" data-crud-form action="../proses/proses_crud_tambah.php" method="POST" novalidate>
    <label for="nim">NIM</label>
    <input id="nim" name="nim" type="text" required>
    <label for="nama">Nama</label>
    <input id="nama" name="nama" type="text" required>
    <label for="program_studi">Program Studi</label>
    <input id="program_studi" name="program_studi" type="text" required>
    <label for="email">Email</label>
    <input id="email" name="email" type="email" required>
    <button type="submit">Simpan</button>
    <a href="index.php">Batal</a>
  </form>
</section>
</main>
<script src="../assets/js/crud.js"></script>
</body>
</html>
