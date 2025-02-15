<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaLead - Accueil</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="logo">WaLead</div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="offres.php">Offres</a></li>
                <li><a href="partenaires.php">Partenaires</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="php/inscription.php" class="cta-button">Inscription</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Section Hero -->
        <section class="hero-section" id="accueil">
            <div class="hero-content">
                <h1>Boostez Vos Ventes WhatsApp</h1>
                <p>Connectez-vous avec vos clients idéals en quelques clics</p>
                <button class="cta-button">Commencer</button>
            </div>
            <img src="./assets/hero-image.png" alt="Réseau professionnel">
        </section>

    <!-- Section Services -->
<section class="services-section" id="services">
    <h2 class="section-title">Nos Solutions Professionnelles</h2>
    
    <div class="services-carousel">
        <button class="carousel-btn prev">‹</button>
        
        <div class="services-track">
            <!-- Service 1 - Réseautage Pro -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('assets/img/services/reseau-pro.jpg')"></div>
                <div class="service-content">
                    <h3>Réseautage Pro</h3>
                    <ul class="service-features">
                        <li>🔹 500+ contacts qualifiés/mois</li>
                        <li>🔹 Filtres sectoriels avancés</li>
                        <li>🔹 Statistiques de connexion</li>
                        <li>🔹 Alertes opportunités</li>
                    </ul>
                    <button class="service-btn">Démarrer</button>
                </div>
            </div>

            <!-- Service 2 - Gestion de Communauté -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('assets/communaute.jpg')"></div>
                <div class="service-content">
                    <h3>Gestion de Communauté</h3>
                    <ul class="service-features">
                        <li>🔹 Modération automatisée</li>
                        <li>🔹 Programmation de contenu</li>
                        <li>🔹 Analyse d'engagement</li>
                        <li>🔹 Rapports hebdomadaires</li>
                    </ul>
                    <button class="service-btn">Démarrer</button>
                </div>
            </div>

            <!-- Service 3 - Vente Digitale -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('assets/vente-digitale.jpg')"></div>
                <div class="service-content">
                    <h3>Vente Digitale</h3>
                    <ul class="service-features">
                        <li>🔹 Tunnel de vente WhatsApp</li>
                        <li>🔹 Paiement mobile intégré</li>
                        <li>🔹 Gestion des commandes</li>
                        <li>🔹 Suivi livraison</li>
                    </ul>
                    <button class="service-btn">Démarrer</button>
                </div>
            </div>

            <!-- Service 4 - Réseaux Sociaux -->
            <div class="service-card">
                <div class="service-image" style="background-image: url('assets/reseaux-sociaux.jpg')"></div>
                <div class="service-content">
                    <h3>Gestion Réseaux Sociaux</h3>
                    <ul class="service-features">
                        <li>🔹 Publication multi-plateformes</li>
                        <li>🔹 Création de contenu IA</li>
                        <li>🔹 Veille concurrentielle</li>
                        <li>🔹 ROI tracker</li>
                    </ul>
                    <button class="service-btn">Démarrer</button>
                </div>
            </div>
        </div>

        <button class="carousel-btn next">›</button>
    </div>
</section>
       <!-- Section Offres -->
<section class="pricing-section" id="offres">
    <h2 class="section-title">Choisissez Votre Offre</h2>
    
    <div class="pricing-grid">
        <!-- Offre Starter -->
        <div class="price-card">
            <div class="price-header">
                <h3>Starter</h3>
                <div class="price-tag">0 XOF<span>/mois</span></div>
            </div>
            <ul class="price-features">
                <li>✓ Profil public basique</li>
                <li>✓ 50 connexions/mois</li>
                <li>✓ Support email</li>
                <li>✗ Statistiques avancées</li>
                <li>✗ Messagerie automatisée</li>
            </ul>
            <button class="price-btn">Commencer</button>
        </div>

        <!-- Offre Premium -->
        <div class="price-card recommended">
            <div class="recommended-badge">Populaire</div>
            <div class="price-header">
                <h3>Premium</h3>
                <div class="price-tag">2000 XOF<span>/mois</span></div>
            </div>
            <ul class="price-features">
                <li>✓ Profil professionnel</li>
                <li>✓ 500 connexions/mois</li>
                <li>✓ Statistiques détaillées</li>
                <li>✓ Support prioritaire</li>
                <li>✗ Automation complète</li>
            </ul>
            <button class="price-btn">Choisir</button>
        </div>

        <!-- Offre Premium Plus -->
        <div class="price-card">
            <div class="price-header">
                <h3>Premium Plus</h3>
                <div class="price-tag">5000 XOF<span>/mois</span></div>
            </div>
            <ul class="price-features">
                <li>✓ Profil VIP mis en avant</li>
                <li>✓ Connexions illimitées</li>
                <li>✓ Automation intelligente</li>
                <li>✓ Support 24/7</li>
                <li>✓ Accès exclusifs</li>
            </ul>
            <button class="price-btn">Optimal</button>
        </div>
    </div>
</section>

        <!-- Section Partenaires -->
        <section class="partners-section" id="partenaires">
            <h2>Nos Partenaires</h2>
            <div class="partners-logos">
                <img src="./assets/partner1.png" alt="Partenaire 1">
                <img src="./assets/partner2.png" alt="Partenaire 2">
                <img src="./assets/partner3.png" alt="Partenaire 3">
            </div>
        </section>

        <!-- Section Contact -->
        <section class="contact-section" id="contact">
            <h2>Contactez-nous</h2>
            <div class="contact-container">
                <form class="contact-form">
                    <input type="text" placeholder="Nom complet" required>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Votre message..." rows="5"></textarea>
                    <button type="submit" class="cta-button">Envoyer</button>
                </form>
                
                <div class="contact-info">
                    <div class="info-item">
                        <img src="./assets/location-icon.png" alt="Adresse">
                        <p>Cotonou, Akpakpa<br>Bénin</p>
                    </div>
                    <div class="info-item">
                        <img src="./assets/phone-icon.png" alt="Téléphone">
                        <p>+229 6000 1151</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Chat Bubble -->
    <div class="chat-bubble">
        <img src="./assets/whatsapp-icon.png" alt="Chat WhatsApp">
    </div>

    <!-- Ajoutez ceci avant la fermeture du body -->
<footer>
    <div class="footer-grid">
        <div class="footer-section">
            <h4>WaLead</h4>
            <p>Plateforme de networking professionnel</p>
            <p>📍 Cotonou, AKPAKPA</p>
        </div>
        
        <div class="footer-section">
            <h4>Contact</h4>
            <ul>
                <li><a href="tel:+22960001151">📞 +229 6000 1151</a></li>
                <li><a href="mailto:contact@walead.bj">📧 contact@walead.bj</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h4>Liens utiles</h4>
            <ul>
                <li><a href="#mentions">Mentions légales</a></li>
                <li><a href="#cgu">CGU</a></li>
                <li><a href="#confidentialite">Confidentialité</a></li>
            </ul>
        </div>
    </div>
    
    <div class="copyright">
        © 2024 WaLead - Tous droits réservés
    </div>
</footer>

    <script src="./js/scripts.js"></script>
</body>
</html>