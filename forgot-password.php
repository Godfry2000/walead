<?php
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $token = bin2hex(random_bytes(32));
    $expires = date('Y-m-d H:i:s', strtotime('+1 hour'));

    $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
    if ($stmt->execute([$token, $expires, $email])) {
        // Envoyer lien par WhatsApp
        $reset_link = "https://votredomaine.com/auth/reset-password.php?token=$token";
        $_SESSION['success'] = "Lien de réinitialisation envoyé sur WhatsApp";
    } else {
        $_SESSION['error'] = "Aucun compte associé à cet email";
    }
}
?>

<!-- Formulaire de demande de réinitialisation -->
 