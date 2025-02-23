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
                <a href="/"><img src="/assets/images/header/logo-arcadia.svg" alt="Logo Arcadia : un rhinocéros dans un soleil levant"></a>
                <a class="navbar-brand ms-4 fs-1 text-primary" href="/">ZOO ARCADIA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-3 fs-5" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-3 fs-5" href="/pages/services.php">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-3 fs-5" href="/pages/habitats.php">Nos habitats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary mx-3 fs-5" href="/pages/contact.php">Contact</a>
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