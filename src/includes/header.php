<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css//style.css">
</head>

<body>
    <?php
    // Récupère le nom du fichier actuel (ex: index.php, contact.php)
    $page_actuelle = basename($_SERVER['PHP_SELF']);
    ?>

    <nav class="navBar" id="mainNav">
        <a href="/index.php"><img src="/src/icon/github.webp" alt=" jacksonCamilleProfil" id="navProfil"></a>
        <ul id="menu">
            <li><a href="/index.php" class="<?= $page_actuelle === 'index.php' ?  'active' : '' ?>">Acceuil</a></li>
            <li><a href="/about.php" class="<?= $page_actuelle === 'about.php' ?  'active' : '' ?>">A propos</a></li>
            <li><a href="/contact.php" class="<?= $page_actuelle === 'contact.php' ?  'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>

</body>
<style>
    * {
        margin: 0;
    }

    #mainNav {
        background-color: #003366;
        display: flex;
        align-items: center;
        border-bottom: #d2b48c 5px solid;
        justify-content: space-between;
    }

    img#navProfil {
        width: 50px;
        margin-left: 100px;
        cursor: pointer;
    }

    ul#menu {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
        margin-right: 100px;

    }

    #menu li {
        color: #fff;
        font-size: 20pt;
    }

    #menu a {
        text-decoration: none;
        color: inherit;

        display: block;
        /* Crucial : transforme le lien en bloc */
        width: 100%;
        /* Prend toute la largeur */
        height: 100%;
        /* Prend toute la hauteur du parent */
        box-sizing: border-box;
        /* Inclut le padding dans la hauteur totale */

        /* Ajoutez du padding pour l'espacement vertical */
        padding: 20px 15px;
        /* 20px haut/bas, 15px gauche/droite */
    }

    #menu a:hover {
        color: #d2b48c;
    }

    .active {
        box-sizing: border-box;
        color: #d2b48c !important;
        background-image: linear-gradient(to top, #d2b48c85, transparent);

    }
</style>

</html>