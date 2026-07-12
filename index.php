<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="/src/Js/script.js" defer></script>
</head>

<body>
    <header>
        <!-- inclusion du header -->
        <?php require 'src/includes/header.php'  ?>
    </header>

    <main #indexMainPage>
                            <!-- Hero page -->
        <section class="Hero" id="mainPageHero">

            <div class="HeroInfos">
                <h1 class="heroTitle">Jackson <span>Camille</span></h1>
                <div class="ligne"></div>
                <h2 class="heroSousTitre">ETUDIANT EN GENIE INFORMATIQUE A L'ISSTM - MAHAJANGA</h2>
                <h2 class="fonction">Développeur & Designer</h2>
                <p class="heroDescription">
                    "Transformons vos idées en réalité"
                </p>

                <div class="CtaContenair">
                    <!-- Boutton vers le contact -->
                    <a href="contact.php" class="bttn" id="MeCOntacterBttn">
                        <span>
                            <img id="envoyericon" class="icon" src="/src/icon/envoyer.png" alt="envoyer_icon">
                        </span>
    
                        <span >
                            ME CONTACTER
                        </span>
                    </a>
                    <!-- Boutton vers pour télecharger mon CV -->
                    <a href="src/cv.pdf" class="bttn" download="Jackson_Camille_CV.pdf" id="TelechargerCV">
                        <span>
                            <img id="TelechargerCVIcon" class="icon" src="/src/icon/telechargements.png" alt="Download_icon">
                        </span>

                        <span>
                            TELECHARGER MON CV
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

        <section class="aboutServices" id="skillsContenaire">

            <div class="about">
                <h2 class="title">A PROPOS</h2>
                <h3 class="sousTitre">Passioné par le développement, le calcul scientifique et <br> les nouvelles technologies. </h3>
                <p class="aboutDescription">Designer et développeur freelance basé à Madagascar. <br>
                    J’accompagne les marques et les entrepreneurs dans la création de sites et d’applications modernes, utiles et centrés sur l’utilisateur.</p>
                <a href="/about.php" class="bttn more">Lire plus</a>
            </div>

            <div class="services">
                <h2 class="title "> SERVICES </h2>

                <div class="cardsContenaire">

                    <div class="servicesCard shadowed">
                        <img src="/src/icon/outils-dedition.png" alt="icone " class="shadowed">
                        <h4 class="service-title">DESIGN</h4>
                        <p class="service-description description">
                            <span class="check">&#10003 </span> Refonte et Modernisation <br>
                            <span class="check">&#10003 </span> UI / UX Design <br>
                            <span class="check">&#10003 </span> Handoff Développeurs
                        </p>
                        <a href="/services.php" class="bttn serviceRedirectio">En savoir plus</a>
                    </div>

                    <div class="servicesCard  shadowed" id="devcards">
                        <img src="/src/icon/code.png" alt="icone " class="shadowed">
                        <h4 class="service-title">DEVELOPPEMENT WEB</h4>
                        <p class="service-description description">
                            <span class="check"> &#10003 </span> Intégration Frontend <br>
                            <span class="check"> &#10003 </span> Design Responsive <br>
                            <span class="check"> &#10003 </span> Développement Sur Mesure <br>
                            <span class="check"> &#10003 </span> APIs/Intégration de Donnée
                        </p>
                        <a href="/services.php" class="bttn serviceRedirectio">En savoir plus</a>
                    </div>

                    <div class="servicesCard shadowed">
                        <img src="/src/icon/server.png" alt="icone " class="shadowed">
                        <h4 class="service-title">BASE DE DONNEES</h4>
                        <p class="service-description description">
                            <span class="check"> &#10003 </span> Administration/Maintenance <br>
                            <span class="check"> &#10003 </span> Optimisation/Performance <br>
                            <span class="check"> &#10003 </span> Modélisation de Données
                        </p>
                        <a href="/services.php" class="bttn serviceRedirectio">En savoir plus</a>
                    </div>

                </div>

            </div>

        </section>

        <section class="skillsContenaire ">
            
            <div class="NostackSkills">

                <h2 class="title">COMPETENCES</h2>
                <div class="competencesWrap">

                    <div class="competences">
                        <h4 class="competencesSubTitles">GRAPHISME</h4>
                        <ol class=" competencesList">
                            <li>Photoshop</li>
                            <li>Figma</li>
                            <li>InkScape</li>
                        </ol>
                    </div>
                    <div class="competences">
                
                        <h4 class="competencesSubTitles">DEVELOPPEMENT WEB</h4>
                        <ol class=" competencesList">
                            <li>HTML/CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>SQL (MySql) </li>
                        </ol>
                    </div>
                
                    <div class="competences">
                        <h4 class="competencesSubTitles">PROGRAMMATION</h4>
                        <ol class=" competencesList">
                            <li>C/C++</li>
                            <li>Python</li>
                            <li>MATLAB</li>
                        </ol>
                    </div>
                </div>
                <p class="remark">(React et Laravel en cours d'apprentissage)</p>
            </div>


            <div class="stack">
                <div class="codeStack">
                    <h2 class="title">OUTILS MAÎTRISER</h2>
                    <ul class="stackIconeContenaire">
                        <li class="StackIcone">
                            <img src="/src/icon/photoshop.png" alt="photoshopIcone">
                        </li>
                        <li class="StackIcone">
                            <img src="/src/icon/figma.png" alt="figmaIcone">
                        </li>
                        <li class="StackIcone">
                            <img src="/src/icon/vscode.png" alt="vsCodeIcone">
                        </li>
                        <li class="StackIcone">
                            <img src="/src/icon/git.png" alt="gitIcone">
                        </li>
                        <li class="StackIcone">
                            <img src="/src/icon/github.png" alt="githubIcone">
                        </li>
                    </ul>

                </div>

                <div class="OSStack">
                    <h2 class="title">OS</h2>
                    <ul class="stackIconeContenaire">
                        <li class="StackIcone">
                            <img src="/src/icon/linux.png" alt="">
                        </li>
                        <li class="StackIcone">
                            <img src="/src/icon/windows.png" alt="">
                        </li>
                    </ul>

                </div>
            </div>

        </section>
        <!-- Inclusion du contac -->
        <?php require 'src/includes/contact.php' ?>

    </main>

    <footer>
        <!-- Inclusio du footer -->
        <?php require 'src/includes/footer.php' ?>
    </footer>


</body>

</html>