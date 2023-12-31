<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Bar de navigation bootstrap -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= SITEBASE ?>">logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= SITEBASE ?>">Mon bon coin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="annonces">Toutes les annonces</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION['user'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="annonceAjout">Nouvelle annonces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="deconnexion" >Deconnexion</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="connexion" class="btn btn-primary">Connexion</a>
                        </li>
                    <?php endif ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <main>