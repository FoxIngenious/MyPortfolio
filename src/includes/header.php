<?php require_once __DIR__ . '/config.php'; ?>
<nav class="navBar" id="mainNav">
    <a href="/index.php" aria-label="Accueil">
        <img src="/src/Image/profilweb.webp" alt="jacksonCamilleProfil" id="navProfil">
    </a>
    <button class="navToggle" id="navToggle" aria-label="Ouvrir le menu" aria-expanded="false">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
    <ul id="menu">
        <?php foreach ($pages as $name => $page) : ?>
        <li><a href="<?= $page['url'] ?>" class="<?= $page_name === $name ? 'active' : '' ?>"><?= $page['label'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
