<?php require('header-partials.tpl.php'); ?>

    <div class="partials__banner nontoxic__banner">
        <h1 class="banner__title">Non-toxique pour les animaux</h1>
    </div>




    <main class="nontoxic__main">

        <div class="main--search">

            <div class="main--search-link">
                <p><a href="../index.html">Acceuil</a> / Non-toxique pour les animaux</p>
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




        <div class="nontoxic__main--gallery">

            <div class="nontoxic__main--gallery-card">
                <img class="nontoxic__main--gallery-image" src="../images/plante-trente-et-un.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
            </div>

            <div class="nontoxic__main--gallery-card">
                <img class="nontoxic__main--gallery-image" src="../images/plante-trente-deux.webp" alt="">
                <h3 class="main__gallery--title">Philodendron white knight</h3>
                <span class="main__gallery--price">50,00€</span>
            </div>



        </div>


    </main>




    <?php require('footer-partials.tpl.php'); ?>