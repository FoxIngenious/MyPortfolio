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
                    <a href="src/cv.pdf" class="bttn"">
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
                <!-- Cercle de décoration -->
                <div class="circle Big"></div>
                <div class="circle second"></div>
                <div class="circle dotrotate"></div>
                <div class="circle fill"></div>
            </div>

        </section>

        <section class="skills" id="skillsContenaire">

            <div class="about">
                <h2 class="title">A PROPOS</h2>
                <h3 class="sousTitre">Passioné par le développement, le calcul scientifique et les nouvelles technologies. </h3>
                <p class="description">Designer et développeur freelance basé à Madagascar. <br>
                    J’accompagne les marques et les entrepreneurs dans la création de sites <br> et d’applications modernes, utiles et centrés sur l’utilisateur.</p>

            </div>

            <div class="services">
                <h2 class="title services-title ">CE QUE JE FAIT </h2>

                <div class="servicesCard">
                    <img src="/src/icon/outils-dedition.png" alt="">
                    <h4 class="service-title">UI/UX Design</h4>
                    <p class="service-description description">Photoshop, UI simple, affiches, conceptions visuelles</p>
                </div>

                <div class="servicesCard">
                    <img src="/src/icon/outils-dedition.png" alt="">
                    <h4 class="service-title">UI/UX Design</h4>
                    <p class="service-description description">Photoshop, UI simple, affiches, conceptions visuelles</p>
                </div>

                <div class="servicesCard">
                    <img src="/src/icon/outils-dedition.png" alt="">
                    <h4 class="service-title">UI/UX Design</h4>
                    <p class="service-description description">Photoshop, UI simple, affiches, conceptions visuelles</p>
                </div>

            </div>

        </section>
    </main>



</body>

</html>