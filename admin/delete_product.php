<?php
session_start();
require_once __DIR__ . "/../includes/db.php";


if (!isset($_SESSION['user']) || $_SESSION['user']['is_admin'] != 1) {
    header("Location: /index.php");
    exit();
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: dashboard.php");
exit();