<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <footer>
        <div class="SocialMediaContenair">
                <img src="/src/icon/github.webp" alt="githubIcon">
                <img src="/src/icon/LinkedIn_icon.svg.png" alt="LinkedInIcon">
        </div>
        <div class="copyRight">
            <p>Jackson Camille , Juillet 2026 </p> 
            <p>Portfolio V0.1</p>
        </div>
    </footer>
</body>
<style>
    footer{
        /* height: 10vh; */
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
</style>
</html>