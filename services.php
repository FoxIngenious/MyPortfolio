<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/services.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/src/Js/script.js" defer></script>
</head>
<body>
    <header>
        <?php require 'src/includes/header.php'  ?>
    </header>
    <main>
        <section class="services-page">
        <div class="container">
        <div class="page-header">
        <h1>Mes Services</h1>
        <p>
            Je propose des solutions adaptées aux particuliers, petites entreprises et projets web.
            Chaque service est pensé pour être pratique, rapide et professionnel.
        </p>
        </div>

        <article class="service-section">
        <div class="service-top">
            <span class="service-number">01</span>
            <h2>🛠️ Micro Services</h2>
        </div>
        <p class="service-intro">
            Pour resoudre vos petit probleme
        </p>
        <div class="service-grid">
            <div class="mini-card">Installation de Sytemes d'exploitation</div>
            <div class="mini-card">Installation et mise à jour des pilotes</div>
            <div class="mini-card">Optimisation des performances d'un PC</div>
            <div class="mini-card">Sauvegarde et récupération de données</div>
            <div class="mini-card">Installation et configuration de logiciels</div>
        </div>
        </article>

        <article class="service-section">
        <div class="service-top">
            <span class="service-number">02</span>
            <h2>🌐 Développement Web & Design</h2>
        </div>
        <p class="service-intro">
            Pour les particuliers, associations et petites entreprises.
        </p>
        <div class="service-grid">
            <div class="mini-card">Site vitrine</div>
            <div class="mini-card">Landing page</div>
            <div class="mini-card">Portfolio professionnel</div>
            <div class="mini-card">Petit site dynamique (PHP/MySQL)</div>
            <div class="mini-card">Formulaires de contact</div>
            <div class="mini-card">Système de connexion (Login/Register)</div>
            <div class="mini-card">Opérations CRUD</div>
            <div class="mini-card">Intégration HTML/CSS/JavaScript</div>
            <div class="mini-card">UI/UX simple</div>
            <div class="mini-card">Maquettes (Figma)</div>
            <div class="mini-card">Design responsive</div>
        </div>

        <h3 class="sub-title">Design graphique</h3>
        <div class="service-grid">
            <div class="mini-card">Affiches</div>
            <div class="mini-card">Flyers</div>
            <div class="mini-card">Bannières</div>
            <div class="mini-card">Publications pour réseaux sociaux</div>
            <div class="mini-card">Cartes de visite</div>
            <div class="mini-card">CV modernes</div>
            <div class="mini-card">Mockups</div>
        </div>
        </article>

        <article class="service-section">
        <div class="service-top">
            <span class="service-number">03</span>
            <h2>⚙️ Backend & Bases de données</h2>
        </div>
        <p class="service-intro">
            Des services plus techniques pour des projets fiables et bien structurés.
        </p>
        <div class="service-grid">
            <div class="mini-card">Conception de bases de données SQL</div>
            <div class="mini-card">Modélisation</div>
            <div class="mini-card">Authentification</div>
            <div class="mini-card">Développement PHP</div>
            <div class="mini-card">Développement Python</div>
            <div class="mini-card">Optimisation des requêtes SQL</div>
        </div>
        </article>

        <article class="service-section">
        <div class="service-top">
            <span class="service-number">04</span>
            <h2>💻 Applications Desktop & Automatisation</h2>
        </div>
        <p class="service-intro">
            Pour les entreprises ayant besoin d’outils internes et de solutions sur mesure.
        </p>
        <div class="service-grid">
            <div class="mini-card">Applications de gestion</div>
            <div class="mini-card">Interfaces graphiques (GUI)</div>
            <div class="mini-card">Applications locales</div>
            <div class="mini-card">Gestion de stock</div>
            <div class="mini-card">Gestion de bibliothèque</div>
            <div class="mini-card">Outils personnalisés</div>
        </div>
        </article>
    </div>
    </section>
        <!-- Inclusion du contac -->
        <?php require 'src/includes/contact.php' ?>

</main>

<footer>
    <?php require 'src/includes/footer.php'  ?> 
</footer>
</body>
</html>
