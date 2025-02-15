<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once "config/config.php";

// Récupération des utilisateurs
$query = $pdo->prepare("SELECT id, pseudo FROM users WHERE id != ?");
$query->execute([$_SESSION['user_id']]);
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - New Lead</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-4">💬 Chat avec un utilisateur</h2>

    <select id="destinataire" class="form-select">
        <option value="">Sélectionnez un contact</option>
        <?php foreach ($users as $user): ?>
            <option value="<?= $user['id'] ?>"><?= htmlspecialchars($user['pseudo']) ?></option>
        <?php endforeach; ?>
    </select>

    <div id="chat-box" class="border p-3 mt-3" style="height: 300px; overflow-y: scroll;">
        <p class="text-center">Sélectionnez un utilisateur pour commencer à discuter.</p>
    </div>

    <div class="input-group mt-3">
        <input type="text" id="message" class="form-control" placeholder="Écrivez votre message...">
        <button id="send-btn" class="btn btn-primary">Envoyer</button>
    </div>

    <a href="dashboard.php" class="btn btn-secondary mt-3">Retour</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let destinataireId = '';

    $("#destinataire").change(function() {
        destinataireId = $(this).val();
        if (destinataireId) {
            loadMessages();
        } else {
            $("#chat-box").html('<p class="text-center">Sélectionnez un utilisateur pour discuter.</p>');
        }
    });

    $("#send-btn").click(function() {
        let message = $("#message").val();
        if (message && destinataireId) {
            $.post("send_message.php", { destinataire_id: destinataireId, message: message }, function() {
                $("#message").val('');
                loadMessages();
            });
        }
    });

    function loadMessages() {
        $.get("load_messages.php", { destinataire_id: destinataireId }, function(data) {
            $("#chat-box").html(data);
            $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
        });
    }

    setInterval(function() {
        if (destinataireId) {
            loadMessages();
        }
    }, 3000);
});
</script>

</body>
</html>
