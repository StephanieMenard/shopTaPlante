<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo&family=Hubballi&family=Open+Sans:wght@300&family=Passion+One&family=Roboto:wght@400;500&family=Smooch+Sans:wght@100;500&display=swap"
        rel="stylesheet">
    <title>Shop Ta Plante</title>
</head>

<body>


    <header>
        <nav class="navbar">
            <div class="navbar__brand">
                <strong>Shop ta plante</strong>
                <p>La boutique en ligne de plante à adopter</p>
            </div>

            <ul class="navbar__menu">
                <li><a class="navbar__menu--item" href="#">Accueil</a></li>

                <li><a class="navbar__menu--item navbar__menu--item-arrow" href="#">Boutique</a>
                    <ul class="navbar__menu--item-submenu">
                        <li><a href="partials/shop-boutures.php">nos boutures racinées maison</a></li>
                        <li><a href="partials/shop-rare-plante.php">nos plantes les plus rares</a></li>
                        <li><a href="partials/shop-all.php">Toutes les plantes du shop</a></li>
                        <li><a href="partials/non-toxique.php">Non-toxique pour les animaux</a></li>
                        <li><a href="partials/shop-already-had.php">Déjà eu sur le shop</a></li>
                    </ul>
                </li>

                <li><a class="navbar__menu--item navbar__menu--item-arrow" href="#">A propos</a>
                    <ul class="navbar__menu--item-submenu">
                        <li><a href="partials/concept.php">Le concept</a></li>
                        <li><a href="partials/contact.php">Contactez-nous</a></li>
                    </ul>
                </li>

                <li><a class="navbar__menu--item" href="partials/account.php">Mon compte</a></li>

                <li><a class="navbar__menu--item" href="partials/shopping.php">Panier</a></li>

                <svg class="navbar-menu--item-hamburger" id="hamburger-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20px"
                    height="20px">
                    <path
                        d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                    </svg>
            </ul>

            <!--
            <div class="navbar__hamburger" id="navbar-items">
                <ul>
                    
                    <li class="navbar__hamburger--item">item 1</li>
                    <li class="navbar__hamburger--item">item2</li>
                    
                </ul>
            </div>
            -->
        </nav>
    </header>