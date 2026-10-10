<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'src/includes/head.php' ?>
</head>
<body>
    <header>
        <?php require 'src/includes/header.php' ?>
    </header>
    <main>
        <section class="services-page" id="services">

            <div class="services-page__head">
                <span class="eyebrow">Mes services</span>
                <h1>Des solutions concrètes pour vos besoins numériques</h1>
            </div>

            <div class="showcase">

                <!-- 01 : Micro Services -->
                <div class="service is-active">
                    <button class="card" type="button" aria-expanded="true" aria-controls="panel-1">
                        <span class="card__icon">
                            <svg viewBox="0 0 24 24"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.4-.6-.6-2.4z"/></svg>
                        </span>
                        <span class="card__body">
                            <span class="card__title">Micro Services</span>
                            <span class="card__text">Dépannage et configuration de votre PC</span>
                        </span>
                        <svg class="card__arrow" viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg>
                    </button>
                    <div class="panel" id="panel-1" role="region" aria-label="Micro Services">
                        <span class="panel__num">01</span>
                        <h2>Micro Services</h2>
                        <p class="panel__desc">Pour résoudre vos petits problèmes informatiques.</p>
                        <ul class="panel__list">
                            <li>Installation de systèmes d'exploitation</li>
                            <li>Installation et mise à jour des pilotes</li>
                            <li>Optimisation des performances d'un PC</li>
                            <li>Sauvegarde et récupération de données</li>
                            <li>Installation et configuration de logiciels</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </div>
                </div>

                <!-- 02 : Développement Web -->
                <div class="service">
                    <button class="card" type="button" aria-expanded="false" aria-controls="panel-2">
                        <span class="card__icon">
                            <svg viewBox="0 0 24 24"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
                        </span>
                        <span class="card__body">
                            <span class="card__title">Développement Web</span>
                            <span class="card__text">Sites et applications sur mesure</span>
                        </span>
                        <svg class="card__arrow" viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg>
                    </button>
                    <div class="panel" id="panel-2" role="region" aria-label="Développement Web">
                        <span class="panel__num">02</span>
                        <h2>Développement Web</h2>
                        <p class="panel__desc">Pour les particuliers, associations et petites entreprises.</p>
                        <ul class="panel__list">
                            <li>Site vitrine</li>
                            <li>Landing page</li>
                            <li>Portfolio professionnel</li>
                            <li>Petit site dynamique (PHP/MySQL)</li>
                            <li>Formulaires de contact</li>
                            <li>Système de connexion (Login/Register)</li>
                            <li>Opérations CRUD</li>
                            <li>Intégration HTML/CSS/JavaScript</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </div>
                </div>

                <!-- 03 : UI/UX & Maquettes -->
                <div class="service">
                    <button class="card" type="button" aria-expanded="false" aria-controls="panel-3">
                        <span class="card__icon">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9"/></svg>
                        </span>
                        <span class="card__body">
                            <span class="card__title">UI / UX &amp; Maquettes</span>
                            <span class="card__text">Des interfaces claires et responsives</span>
                        </span>
                        <svg class="card__arrow" viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg>
                    </button>
                    <div class="panel" id="panel-3" role="region" aria-label="UI / UX et Maquettes">
                        <span class="panel__num">03</span>
                        <h2>UI / UX &amp; Maquettes</h2>
                        <p class="panel__desc">Des interfaces pensées pour vos utilisateurs, sur tous les écrans.</p>
                        <ul class="panel__list">
                            <li>UI/UX simple</li>
                            <li>Maquettes (Figma)</li>
                            <li>Design responsive</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </div>
                </div>

                <!-- 04 : Design graphique -->
                <div class="service">
                    <button class="card" type="button" aria-expanded="false" aria-controls="panel-4">
                        <span class="card__icon">
                            <svg viewBox="0 0 24 24"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.6 7.6"/><circle cx="11" cy="11" r="2"/></svg>
                        </span>
                        <span class="card__body">
                            <span class="card__title">Design graphique</span>
                            <span class="card__text">Des visuels qui valorisent votre image</span>
                        </span>
                        <svg class="card__arrow" viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg>
                    </button>
                    <div class="panel" id="panel-4" role="region" aria-label="Design graphique">
                        <span class="panel__num">04</span>
                        <h2>Design graphique</h2>
                        <p class="panel__desc">Supports de communication print et digitaux.</p>
                        <ul class="panel__list">
                            <li>Affiches</li>
                            <li>Flyers</li>
                            <li>Bannières</li>
                            <li>Publications pour réseaux sociaux</li>
                            <li>Cartes de visite</li>
                            <li>CV modernes</li>
                            <li>Mockups</li>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Inclusion du contact -->
        <?php require 'src/includes/contact.php' ?>

    </main>

    <footer>
        <?php require 'src/includes/footer.php' ?>
    </footer>
</body>
</html>
