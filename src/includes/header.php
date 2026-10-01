<?php
$page_actuelle = basename($_SERVER['PHP_SELF']);
?>
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
        <li><a href="/index.php" class="<?= $page_actuelle === 'index.php' ? 'active' : '' ?>">Acceuil</a></li>
        <li><a href="/about.php" class="<?= $page_actuelle === 'about.php' ? 'active' : '' ?>">A propos</a></li>
        <li><a href="/services.php" class="<?= $page_actuelle === 'services.php' ? 'active' : '' ?>">Services</a></li>
        <li><a href="/contact.php" class="<?= $page_actuelle === 'contact.php' ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>
