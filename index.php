<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'src/includes/head.php' ?>
</head>

<body>
    <header>
        <!-- inclusion du header -->
        <?php require 'src/includes/header.php'  ?>
    </header>

    <main id="indexMainPage">
                            <!-- Hero page -->
        <section class="Hero" id="mainPageHero">

            <div class="HeroInfos">
                <h1 class="heroTitle reveal reveal-left">Jackson <span>Camille</span></h1>
                <div class="ligne reveal reveal-left delay-1"></div>
                <h2 class="heroSousTitre reveal reveal-left delay-2">ETUDIANT EN GENIE INFORMATIQUE A L'ISSTM - MAHAJANGA</h2>
                <h2 class="fonction reveal reveal-left delay-3">Développeur & Designer</h2>
                <p class="heroDescription reveal reveal-left delay-4">
                    "Transformons vos idées en réalité"
                </p>

                <div class="CtaContenair reveal reveal-left delay-5">
                    <!-- Boutton vers le contact -->
                    <a href="#contact" class="bttn" id="MeCOntacterBttn">
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

            <div class="profilContenaire reveal reveal-right delay-2">
                <img id="profilHero" src="src/Image/profil.webp" alt="jacksoncamilleprofil">
                <!-- Cercle de décoration -->
                <div class="circle Big"></div>
                <div class="circle second"></div>
                <div class="circle dotrotate"></div>
                <div class="circle fill"></div>
            </div>

        </section>

        <section class="aboutServices contenaire" id="skillsContenaire">

            <div class="about">
                <h2 class="title reveal reveal-left">A PROPOS</h2>
                <h3 class="sousTitre reveal reveal-left delay-1">Passioné par le développement, le calcul scientifique et <br> les nouvelles technologies. </h3>
                <p class="aboutDescription reveal reveal-left delay-2">Designer et développeur freelance basé à Madagascar. <br>
                    J’accompagne les marques et les entrepreneurs dans la création de sites et d’applications modernes, utiles et centrés sur l’utilisateur.</p>
                <a href="/about.php" class="bttn more reveal reveal-left delay-3">Lire plus</a>
            </div>

            <div class="services">
                <h2 class="title reveal reveal-zoom"> SERVICES </h2>

                <div class="cardsContenaire">

                    <div class="servicesCard shadowed reveal reveal-zoom delay-1">
                        <img src="/src/icon/outils-dedition.png" alt="icone " class="shadowed">
                        <h4 class="service-title">DESIGN</h4>
                        <p class="service-description description">
                            <span class="check">&#10003 </span> Refonte et Modernisation <br>
                            <span class="check">&#10003 </span> UI / UX Design <br>
                            <span class="check">&#10003 </span> Handoff Développeurs
                        </p>
                        <a href="/services.php" class="bttn serviceRedirectio">En savoir plus</a>
                    </div>

                    <div class="servicesCard  shadowed reveal reveal-zoom delay-2" id="devcards">
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

                    <div class="servicesCard shadowed reveal reveal-zoom delay-3">
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

        <section class="skillsContenaire">
            
            <div class="NostackSkills">

                <h2 class="title reveal reveal-left">COMPETENCES</h2>
                <div class="competencesWrap reveal reveal-zoom delay-1">

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
                <p class="remark reveal reveal-zoom delay-2">(React et Laravel en cours d'apprentissage)</p>
            </div>


            <div class="stack">
                <div class="codeStack">
                    <h2 class="title reveal reveal-right">OUTILS MAÎTRISER</h2>
                    <ul class="stackIconeContenaire reveal reveal-zoom delay-1">
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
                    <h2 class="title reveal reveal-right delay-1">OS</h2>
                    <ul class="stackIconeContenaire reveal reveal-zoom delay-2">
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