<?php
session_start();
require_once "config/config.php";

if (!isset($_SESSION['user_id']) || !isset($_POST['destinataire_id']) || !isset($_POST['message'])) {
    exit();
}

$expediteur_id = $_SESSION['user_id'];
$destinataire_id = $_POST['destinataire_id'];
$message = trim($_POST['message']);

if (!empty($message)) {
    $query = $pdo->prepare("INSERT INTO messages (expediteur_id, destinataire_id, message) VALUES (?, ?, ?)");
    $query->execute([$expediteur_id, $destinataire_id, $message]);
}
?>
