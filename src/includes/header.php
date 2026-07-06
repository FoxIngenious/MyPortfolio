<?php
// Récupère le nom du fichier actuel (ex: index.php, contact.php)
$page_actuelle = basename($_SERVER['PHP_SELF']);
$page_name = pathinfo($page_actuelle, PATHINFO_FILENAME);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JacksonCamille | <?= $page_name === 'index' ? 'Acceuile' : $page_name ?></title> <!-- Si le nom du page = index on donne un nom Acceuille si non le nom de la page-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/src/Js/script.js" defer></script>
</head> 
    <nav class="navBar" id="mainNav">
        <a href="/index.php"><img src="/src/Image/profilweb.webp" alt=" jacksonCamilleProfil" id="navProfil"></a>
        <ul id="menu">
            <li><a href="/index.php" class="<?= $page_actuelle === 'index.php' ?  'active' : '' ?>">Acceuil</a></li>
            <li><a href="/about.php" class="<?= $page_actuelle === 'about.php' ?  'active' : '' ?>">A propos</a></li>
            <li><a href="/services.php" class="<?= $page_actuelle === 'services.php' ?  'active' : '' ?>">Services</a></li>
            <li><a href="/contact.php" class="<?= $page_actuelle === 'contact.php' ?  'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>

<style>
    * {
        margin: 0;
    } 

    #mainNav {
        position: fixed;
        z-index: 3;
        width: 100%;
        height:70px;
        display: flex;
        background-color: #003366;
        align-items: center;
        border-bottom: #d2b48c 5px solid;
        justify-content: space-between;
        top: 0;
    }

    img#navProfil {
        width: 50px;
        margin-left: 200px;
        cursor: pointer;
    }

    ul#menu {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
        margin-right: 200px;

    }

    #menu li {
        color: #fff;
        font-size: 20pt;
    }

    #menu a {
        text-decoration: none;
        color: inherit;

        display: block;
        width: 100%;
        height: 100%;
        box-sizing: border-box;

        padding: 20px 15px;
    }

    #menu a:hover {
        color: #d2b48c;
    }

    .active {
        box-sizing: border-box;
        color: #d2b48c !important;
        background-image: linear-gradient(to top, #d2b48c60, transparent);

    }
</style>