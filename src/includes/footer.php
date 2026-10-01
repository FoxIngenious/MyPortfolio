        <div class="SocialMediaContenair">
            <a href="#" class="socialLink" aria-label="GitHub">
                <img src="/src/icon/github.webp" alt="githubIcon">
            </a>
            <a href="#" class="socialLink" aria-label="LinkedIn">
                <img src="/src/icon/LinkedIn_icon.svg.png" alt="LinkedInIcon">
            </a>
        </div>
        <div class="copyRight">
            <p>Jackson Camille , Juillet 2026 </p>
            <p>Portfolio V0.1</p>
        </div>
<style>
    footer{
        background: #000000;
        display: flex;
        flex-direction:column;
        place-self:center;
        text-align:center;
        color: #5a5353;
        width:100%;
    }
    .SocialMediaContenair{
        display: flex;
        flex-direction:row;
        justify-content: center;
    }

    .SocialMediaContenair img{
        margin:20px;
        max-width: 60px;
        padding: 10px;
        background: #fff;
        border: none;
        border-radius: 20px;
    }

    .socialLink img {
        transition: var(--transition);
    }

    .socialLink:hover img {
        transform: translateY(-5px);
    }
</style>
