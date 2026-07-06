<?php
// Récupère le nom du fichier actuel (ex: index.php, contact.php)
$page_actuelle = basename($_SERVER['PHP_SELF']);
$page_name = pathinfo($page_actuelle, PATHINFO_FILENAME);
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JacksonCamille | <?= $page_name === 'index' ? 'Acceuile' : $page_name ?></title> <!-- Si le nom du page = index on donne un nom Acceuille si non le nom de la page-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/src/Js/script.js" defer></script>