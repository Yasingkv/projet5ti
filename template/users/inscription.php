
    <div class="flex justify-content-space-evenly">
        <div class="flex ">
            <form action="" method="post">
                <fieldset>
                    <legend>vos coordonées</legend>
                    
                        <div>     
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" placeholder="Nom et prenom" class="form-control" id="Nom" name="nom" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurNom ?><?php endif ?>">
                            <?php if(isset($messageError["nom"])) : ?> <p class="text-danger"> <?= $messageError["nom"] ?> </p> <?php endif ?>
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" placeholder="Email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMail ?><?php endif ?>">
                            <?php if(isset($messageError["email"])) : ?> <p class="text-danger"> <?= $messageError["email"] ?> </p> <?php endif ?>
                        </div>
                        <div>
                            <label for="Password" class="form-label">Mot de passe</label>
                            <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mot_de_passe" value="<?php if(isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->utilisateurMDP ?><?php endif ?>">
                            <?php if(isset($messageError["mot_de_passe"])) : ?> <p class="text-danger"> <?= str_replace('_',' ',$messageError["mot_de_passe"]) ?> </p> <?php endif ?>
                        </div>
                </fieldset>
                    <div class="flex justify-content-space-evenly  ">
                        <input type="submit" name="button" value="Button">
                    </div>
                        
            </form>
        </div>
    </div>
    
    

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>