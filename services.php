<?php
/* Données des services : une seule structure alimente cartes + panneaux */
$services = [
    [
        'title' => 'Micro Services',
        'text'  => 'Dépannage et configuration de votre PC',
        'desc'  => 'Pour résoudre vos petits problèmes informatiques.',
        'icon'  => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.5 2.5-2.4-.6-.6-2.4z"/>',
        'items' => [
            "Installation de systèmes d'exploitation",
            'Installation et mise à jour des pilotes',
            "Optimisation des performances d'un PC",
            'Sauvegarde et récupération de données',
            'Installation et configuration de logiciels',
        ],
    ],
    [
        'title' => 'Développement Web',
        'text'  => 'Sites et applications sur mesure',
        'desc'  => 'Pour les particuliers, associations et petites entreprises.',
        'icon'  => '<path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>',
        'items' => [
            'Site vitrine',
            'Landing page',
            'Portfolio professionnel',
            'Petit site dynamique (PHP/MySQL)',
            'Formulaires de contact',
            'Système de connexion (Login/Register)',
            'Opérations CRUD',
            'Intégration HTML/CSS/JavaScript',
        ],
    ],
    [
        'title' => 'UI / UX & Maquettes',
        'text'  => 'Des interfaces claires et responsives',
        'desc'  => 'Des interfaces pensées pour vos utilisateurs, sur tous les écrans.',
        'icon'  => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9"/>',
        'items' => [
            'UI/UX simple',
            'Maquettes (Figma)',
            'Design responsive',
        ],
    ],
    [
        'title' => 'Design graphique',
        'text'  => 'Des visuels qui valorisent votre image',
        'desc'  => 'Supports de communication print et digitaux.',
        'icon'  => '<path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.6 7.6"/><circle cx="11" cy="11" r="2"/>',
        'items' => [
            'Affiches',
            'Flyers',
            'Bannières',
            'Publications pour réseaux sociaux',
            'Cartes de visite',
            'CV modernes',
            'Mockups',
        ],
    ],
];
?>
<?php require 'src/includes/page-start.php'; ?>
        <section class="services-page" id="services">

            <div class="services-page__head">
                <span class="eyebrow">Mes services</span>
                <h1>Des solutions concrètes pour vos besoins numériques</h1>
            </div>

            <div class="showcase">

                <?php foreach ($services as $index => $service) : $num = sprintf('%02d', $index + 1); ?>
                <!-- <?= $num ?> : <?= htmlspecialchars($service['title'], ENT_QUOTES) ?> -->
                <div class="service<?= $index === 0 ? ' is-active' : '' ?>">
                    <button class="card" type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="panel-<?= $num ?>">
                        <span class="card__icon">
                            <svg viewBox="0 0 24 24"><?= $service['icon'] ?></svg>
                        </span>
                        <span class="card__body">
                            <span class="card__title"><?= htmlspecialchars($service['title'], ENT_QUOTES) ?></span>
                            <span class="card__text"><?= htmlspecialchars($service['text'], ENT_QUOTES) ?></span>
                        </span>
                        <svg class="card__arrow" viewBox="0 0 24 24"><path d="M9 6l6 6-6 6"/></svg>
                    </button>
                    <div class="panel" id="panel-<?= $num ?>" role="region" aria-label="<?= htmlspecialchars($service['title'], ENT_QUOTES) ?>">
                        <span class="panel__num"><?= $num ?></span>
                        <h2><?= htmlspecialchars($service['title'], ENT_QUOTES) ?></h2>
                        <p class="panel__desc"><?= htmlspecialchars($service['desc'], ENT_QUOTES) ?></p>
                        <ul class="panel__list">
                            <?php foreach ($service['items'] as $item) : ?>
                            <li><?= htmlspecialchars($item, ENT_QUOTES) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a class="btn" href="#contact">Demander un devis</a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </section>

        <!-- Inclusion du contact -->
        <?php require 'src/includes/contact.php' ?>
<?php require 'src/includes/page-end.php'; ?>
