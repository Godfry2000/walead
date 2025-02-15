<?php
require_once('config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifier = clean_input($_POST['identifier']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR pseudo = ?");
    $stmt->execute([$identifier, $identifier]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        if ($user['is_verified']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_pseudo'] = $user['pseudo'];
            header('Location: ../dashboard.php');
            exit();
        } else {
            $_SESSION['error'] = "Veuillez vérifier votre compte via WhatsApp";
        }
    } else {
        $_SESSION['error'] = "Identifiants incorrects";
    }
}
?>

<!-- Structure HTML similaire à register.php -->