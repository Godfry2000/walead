<?php
session_start();
require_once "config/config.php";

if (!isset($_SESSION['user_id']) || !isset($_GET['destinataire_id'])) {
    exit();
}

$expediteur_id = $_SESSION['user_id'];
$destinataire_id = $_GET['destinataire_id'];

$query = $pdo->prepare("
    SELECT * FROM messages 
    WHERE (expediteur_id = ? AND destinataire_id = ?) 
       OR (expediteur_id = ? AND destinataire_id = ?) 
    ORDER BY date_envoi ASC
");
$query->execute([$expediteur_id, $destinataire_id, $destinataire_id, $expediteur_id]);
$messages = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($messages as $msg) {
    $align = ($msg['expediteur_id'] == $_SESSION['user_id']) ? 'text-end' : 'text-start';
    echo "<p class='$align'><strong>" . htmlspecialchars($msg['message']) . "</strong></p>";
}
?>
