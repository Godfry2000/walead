<?php
// contact.php
include 'header.php';
?>
    <main>
        <section class="contact-section" id="contact">
            <h2>Contactez-nous</h2>
            <form class="contact-form">
                <input type="text" placeholder="Nom complet" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Votre message..." rows="5"></textarea>
                <button type="submit" class="cta-button">Envoyer</button>
            </form>
        </section>
    </main>
<?php
include 'footer.php';
?>

