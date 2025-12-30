<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Serveur Minecraft survie 100% Vanilla">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <!--FONT-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="/assets/css/app.css">
        <!--Preload-->
        <link rel="preload" fetchpriority="high" as="image" href="/assets/img/banierre-devaron-v2.webp" type="image/webp">
        <!--JS-->
        <script type="module" src="/assets/js/bootstrap.bundle.min.js" async></script>
        <title>Devaron.fr | Serveur Minecraft Vanilla</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-lg">
                <a class="navbar-brand" href="/">Devaron</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link <?= $page == '' ? 'active' : '' ?>" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= $page == 'join' ? 'active' : '' ?>" href="/join">Nous Rejoindre</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= $page == 'dynmap' ? 'active' : '' ?>" href="/dynmap">Dynmap</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" rel="noopener" href="https://stats.devaron.fr/" target="_blank">Statistiques</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
