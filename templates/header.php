<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.png">

    <title>Zoo Arcadia</title>
</head>

<body>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <div class="logo-zoo">
                    <a href="/"><img class="logo" src="/assets/images/header/logo-arcadia.svg" alt="Logo Arcadia : un rhinocéros dans un soleil levant"></a>
                </div>
                <div class="name-zoo">
                    <a class="navbar-brand mx-auto ms-lg-4 text-primary" href="/">ZOO ARCADIA</a>
                </div>
                <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-end">
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-2 fs-5" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-2 fs-5" href="/pages/services.php">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-2 fs-5" href="/pages/habitats.php">Nos habitats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-2 fs-5" href="/pages/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['monUser'])) { ?>
                                <a class="btn btn-primary mx-3 fs-5" href="/pages/auth/logout.php">Déconnexion</a>
                            <?php } else { ?>
                                <a class="btn btn-outline-primary mx-3 fs-5" href="/pages/auth/login.php">Connexion</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>