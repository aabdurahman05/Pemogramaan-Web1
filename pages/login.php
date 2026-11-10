<?php
session_start();
require_once __DIR__ . "/../config/koneksi.php";

if (!empty($_SESSION["user_id"])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $conn->prepare("SELECT id, username, password, nama_lengkap FROM users WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($user && password_verify($password, $user["password"])) {
        session_regenerate_id(true);
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["nama_lengkap"] = $user["nama_lengkap"];
        header("Location: dashboard.php");
        exit;
    }
    $error = "Username atau password salah.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<main class="login-box">
<section>
  <h2>Login</h2>
  <?php if ($error): ?>
    <div class="alert-error"><?= htmlspecialchars($error); ?></div>
  <?php endif; ?>
  <form class="crud-form" method="POST">
    <label for="username">Username</label>
    <input id="username" name="username" type="text" required autofocus>
    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>
    <button type="submit">Masuk</button>
  </form>
  <p class="file-hint">Default: admin / admin123</p>
</section>
</main>
</body>
</html>
