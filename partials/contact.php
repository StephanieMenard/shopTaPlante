<?php require('header-partials.tpl.php'); ?>


    <div class="partials__banner contact__banner">
        <h1 class="banner__title">Contactez-nous</h1>
    </div>




    <main class="contact__main">

        <form action="" method="get" class="contact__main--form">

            <div class="contact__main--form-div">
              <label class="contact__main--label-form" for="name">Votre nom (obligatoire)</label>
              <br>
              <input class="contact__main--input" type="text" name="name" id="name" required>
            </div>

            <div class="contact__main--form-div">
              <label class="contact__main--label-form" for="email">Votre adresse de messagerie (obligatoire)</label>
              <br>
              <input class="contact__main--input" type="email" name="email" id="email" required>
            </div>

            <div class="contact__main--form-div">
                <label class="contact__main--label-form"  for="object">Objet</label>
                <br>
                <input class="contact__main--input" type="text" name="object" id="object" required>
            </div>

            <div class="contact__main--form-div">
                <label class="contact__main--label-form"  for="message">Votre message</label>
                <br>
                <textarea class="contact__main--input" id="message" name="message" rows="5" cols="33">
                </textarea>
            </div>


            <div class="contact__main--form-div">
              <input class="contact__main--form-button" type="submit" value="Envoyer">
            </div>

          </form>

    </main>



    <?php require('footer-partials.tpl.php'); ?>