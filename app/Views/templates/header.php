<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--FONT-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="/assets/css/reset.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <!--JS-->
        <script type="module" src="/assets/js/nav.js"></script>
        <title>Devaron.fr | Serveur Vanilla</title>
    </head>
    <body>
        <header>
            <div id="root-nav">
                <nav id="desktop-nav">
                    <a href=""><img src="/assets/img/logo-transparent.png" alt="logo devaron"></a>
                    <ul id="desktop-navlink">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="">Nous rejoindre</a></li>
                        <li><a href="">Dynmap</a></li>
                        <li><a href="">Statistiques</a></li>
                    </ul>
                </nav>

                <nav id="mobile-nav">
                    <div id="burger-btn">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul id="mobile-navlink">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="">Nous rejoindre</a></li>
                        <li><a href="">Dynmap</a></li>
                        <li><a href="">Statistiques</a></li>
                    </ul>
                </nav>
            </div>
        </header>
