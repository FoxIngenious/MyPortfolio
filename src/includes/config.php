<?php
/* Source unique : page courante, navigation et titre du document.
   Inclus par head.php et header.php pour éviter la duplication. */

$page_actuelle = basename($_SERVER['PHP_SELF']);
$page_name = pathinfo($page_actuelle, PATHINFO_FILENAME);

/* Pages affichées dans la navigation (ordre = ordre du menu) */
$pages = [
    'index'    => ['label' => 'Acceuil',   'url' => '/index.php'],
    'about'    => ['label' => 'A propos',  'url' => '/about.php'],
    'services' => ['label' => 'Services',  'url' => '/services.php'],
    'contact'  => ['label' => 'Contact',   'url' => '/contact.php'],
];

/* Titres qui ne figurent pas dans le menu */
$extra_titles = ['404' => 'Page introuvable'];

$page_title = $extra_titles[$page_name]
    ?? ($pages[$page_name]['label'] ?? ucfirst($page_name));
