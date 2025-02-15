<?php
session_start();
require_once "config/config.php";

if (!isset($_SESSION['user_id'])) {
    echo 0;
    exit();
}

$query = $pdo->prepare("SELECT COUNT(*) FROM messages WHERE destinataire_id = ? AND lu = 0");
$query->execute([$_SESSION['user_id']]);
$count = $query->fetchColumn();

echo $count;
?>
