<?php
require_once __DIR__ . "/../config/auth.php";
require_once __DIR__ . "/../config/koneksi.php";
$result = $conn->query("SELECT nim, nama, program_studi, email FROM mahasiswa ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
  <h1>Data Mahasiswa</h1>
  <p>Daftar mahasiswa (read-only)</p>
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
  <h2>Data Mahasiswa</h2>
  <div class="table-scroll">
  <table class="data-table">
    <thead><tr><th>No</th><th>NIM</th><th>Nama</th><th>Program Studi</th><th>Email</th></tr></thead>
    <tbody>
    <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row["nim"]); ?></td>
        <td><?= htmlspecialchars($row["nama"]); ?></td>
        <td><?= htmlspecialchars($row["program_studi"]); ?></td>
        <td><?= htmlspecialchars($row["email"]); ?></td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
  </div>
</section>
</main>
</body>
</html>
