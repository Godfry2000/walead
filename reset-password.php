<?php
require_once('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $token = bin2hex(random_bytes(32));
    
    $stmt = $conn->prepare("UPDATE users SET reset_token = ?, reset_expires = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
    $stmt->bind_param("ss", $token, $email);
    
    if ($stmt->execute()) {
        // Envoyer lien par WhatsApp
        $reset_link = BASE_URL . "/auth/reset-password.php?token=$token";
        $_SESSION['success'] = "Lien de réinitialisation envoyé sur WhatsApp";
    }
    
    redirect('../forgot-password.php');
}
?>