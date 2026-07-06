
    <div class="navBar" id="mainNav">
        <a href="/index.php"><img src="/src/Image/profilweb.webp" alt=" jacksonCamilleProfil" id="navProfil"></a>
        <ul id="menu">
            <li><a href="/index.php" class="<?= $page_actuelle === 'index.php' ?  'active' : '' ?>">Acceuil</a></li>
            <li><a href="/about.php" class="<?= $page_actuelle === 'about.php' ?  'active' : '' ?>">A propos</a></li>
            <li><a href="/services.php" class="<?= $page_actuelle === 'services.php' ?  'active' : '' ?>">Services</a></li>
            <li><a href="/contact.php" class="<?= $page_actuelle === 'contact.php' ?  'active' : '' ?>">Contact</a></li>
        </ul>
    </div>

<style>
    * {
        margin: 0;
    } 

    #mainNav {
        position: fixed;
        z-index: 3;
        width: 100%;
        display: flex;
        background-color: #003366;
        align-items: center;
        border-bottom: #d2b48c 5px solid;
        justify-content: space-between;
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