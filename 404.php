<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require 'src/includes/head.php' ?>
</head>

<body>
    <main>
        <section class="notfound-page reveal">
            <h1 class="notfound-code">404</h1>
            <h2 class="title">PAGE INTROUVABLE</h2>
            <p class="notfound-text">La page que vous cherchez n'existe pas ou a été déplacée.</p>
            <a href="/index.php" class="bttn">
                <i class="fas fa-home"></i>
                RETOUR A L'ACCUEIL
            </a>
        </section>
    </main>
</body>

</html>
