<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- inclusion du header -->
        <?php require 'src/includes/header.php'  ?>
    </header>

    <main #indexMainPage>

        <!-- ****************************HERO PAGE STRAT HERE ************************ -->
        <section class="Hero" id="mainPageHero">

            <div class="HeroInfos">
                <h1 class="heroTitle">Jackson <span class="camille">Camille</span></h1>
                <h2 class="heroSousTitre">ETUDIANT EN GENIE INFORMATIQUE <br> A L'ISSTM - MAHAJANGA</h2>
                <h2 class="fonction">Développeur & Designer</h2>
                <p class="heroDescription">
                    "Transformons vos idées en réalité"
                </p>

                <div class="CtaContenair">
                    <!-- Boutton vers pour télecharger mon CV -->
                    <a href="src/Image/profilweb.webp" class="bttn"">
                        <span>
                            <img id=" TelechargerCV" class="icon" src="/src/icon/telechargements.png" alt="Download_icon">
                        </span>

                        <span>
                            TELECHARGER MON CV
                        </span>
                    </a>

                    <!-- Boutton vers le contact -->
                    <a href="contact.php" class="bttn">
                        <span>
                            <img id="envoyericon" class="icon" src="/src/icon/envoyer.png" alt="envoyer_icon">
                        </span>

                        <span>
                            ME CONTACTER
                        </span>
                    </a>

                </div>
            </div>
            <div class="profilContenaire">
                <img id="profilHero" src="src/Image/profil.webp" alt="jacksoncamilleprofil">
            </div>
        </section>


    </main>



</body>

</html>