<?php
session_start();
header("Location: " . (empty($_SESSION["user_id"]) ? "pages/login.php" : "pages/dashboard.php"));
exit;
