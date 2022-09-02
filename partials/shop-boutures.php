<?php require('header-partials.tpl.php'); ?>


    <div class="partials__banner boutures__banner">
        <h1 class="banner__title">Nos boutures racinées maison</h1>
    </div>




    <main class="boutures__main">

        <div class="main--search">

            <div class="main--search-link">
                <p><a href="../index.html">Acceuil</a> / Nos boutures racinées maison</p>
            </div>

            <div class="main--search-select">
                <select name="tri" id="tri-default">
                    <option value="">Tri par défaut</option>
                    <option value="popularite">Tri par popularité</option>
                    <option value="recent">Tri du plus récent au plus ancien</option>
                    <option value="croissant">Tri par tarif croissant</option>
                    <option value="decroissant">Tri par tarif décroissant</option>
                </select>
            </div>
        </div>




        <div class="boutures__main--gallery">

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-vingt-cinq.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="mai__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-vingt-six.jpeg" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-vingt-sept.jpeg" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-vingt-huit.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-vingt-neuf.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>

            <div class="main__gallery--card">
                <img class="main__gallery--image" src="../images/plante-trente.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
                <button class="main__gallery--button">Ajouter au panier</button>
            </div>


        </div>


    </main>



    <?php require('footer-partials.tpl.php'); ?>