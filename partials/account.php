<?php require('header-partials.tpl.php'); ?>


  



    <main class="account__main">

        <h1 class="account__main--title">Mon compte</h1>

        <div class="account__main--div">

        <div class="account__main--div-connexion">

            <h2 class="account__main--subtitle">Connexion</h2>

            <div class="account__main--form-div">
                <label class="account__main--label-form" for="username">Identifiant ou email</label>
                <br>
                <input class="account__main--input" type="text" id="username" name="username">
            </div>
            
            <div class="account__main--form-div">
                <label class="account__main--label-form" for="pass">Mot de passe</label>
                <br>
                <input class="account__main--input" type="password" id="pass" name="password" minlength="8" required>
            </div>

            <div class="account__main--form-div">
                <input type="checkbox" id="rememberme" name="rememberme" value="1">
                <label for="rememberme">Se souvenir de moi</label>

                <input  class="account__main--form-button" type="submit" value="Identification">
            </div>
            
            <div class="account__main--form-div">
                <a class="account__main--form-link" href="#">Mot de passe perdu ?</a>
            </div>
            
        </div>





        <div class="account__main--div-register">

            <h2 class="account__main--subtitle">S'enregistrer</h2>

            <div class="account__main--form-div">
                <label class="account__main--label-form" for="name">Identifiant</label>
                <br>
                <input class="account__main--input" type="text" name="name" id="name" required>
            </div>

            <div class="account__main--form-div">
                <label class="account__main--label-form" for="email">Email</label>
                <br>
                <input class="account__main--input" type="email" name="email" id="email" required>
            </div>

            <div class="account__main--form-div">
                <label class="account__main--label-form" for="pass">Mot de passe</label>
                <input class="account__main--input" type="password" id="password" name="password"
                       minlength="8" required>
            </div>

            <p>Vos données personnelles seront utilisées pour vous accompagner au cours de votre visite du site web, gérer l’accès à votre compte, et pour d’autres raisons décrites dans notre politique de confidentialité.</p>


            
            <input  class="account__main--form-button" type="submit" value="S'enregistrer">
            
        </div>

        </div>


    </main>


<?php require('footer-partials.tpl.php'); ?>