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
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#offres">Offres</a></li>
                <li><a href="#partenaires">Partenaires</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="php/inscription.php" class="cta-button">Inscription</a></li>
            </ul>
        </nav>
    </header>


    
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