<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
ini_set('display_errors', 1);
error_reporting(E_ALL);


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

echo "Bienvenue sur votre Dashboard, " . $_SESSION['pseudo'] . " !";
?>
<a href="logout.php">Déconnexion</a>
