<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(__DIR__ . '/config.php');


// Vérifier si une session est déjà active avant de la démarrer
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Fonction de nettoyage sécurisée
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['csrf_token']) || !isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die('❌ Invalid CSRF token');
    }

    $data = [
        'nom' => sanitize($_POST['nom']),
        'prenom' => sanitize($_POST['prenom']),
        'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        'whatsapp' => preg_replace('/[^0-9]/', '', $_POST['whatsapp']),
        'pays' => sanitize($_POST['pays']),
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'pseudo' => sanitize($_POST['pseudo']),
        'verification_token' => bin2hex(random_bytes(16))
    ];

    try {
        // Vérifier si l'email ou le pseudo existent déjà
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email OR pseudo = :pseudo");
        $stmt->execute(['email' => $data['email'], 'pseudo' => $data['pseudo']]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['error'] = "❌ Email ou pseudo déjà utilisé";
            header("Location: ../inscription.php");
            exit;
        }

        // Insérer l'utilisateur
        $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, whatsapp, pays, password, pseudo, verification_token) 
                              VALUES (:nom, :prenom, :email, :whatsapp, :pays, :password, :pseudo, :verification_token)");
        $stmt->execute($data);

        $_SESSION['success'] = "✅ Inscription réussie! Vérifiez votre WhatsApp";
        header("Location: ../login.php");
        exit;
    } catch (PDOException $e) {
        $_SESSION['error'] = "❌ Erreur d'inscription: " . $e->getMessage();
        header("Location: ../inscription.php");
        exit;
    }
}
?>
