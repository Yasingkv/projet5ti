<?php
session_start();
require_once('Config/dataBaseConnexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/formulaire.css">
    <link rel="stylesheet" href="CSS/index2.css">
    <title>mon projet</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
                <?php if(isset($_SESSION["user"])) : ?>
                    <li  class="menu"><a href="/profil">Page profil</a></li>
                    <li class="menu"><a href="/deconnexion">deconnexion</a></li>
                <?php else :  ?>
                    <li class="menu"><a href="/connexion">Connexion</a></li>
                    <li class="menu"><a href="/inscription">Inscription</a></li>
                    
                <?php endif ?>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="/profil"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="/connexion"><ion-icon size="large" name="cloud-done-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="/inscription"><ion-icon size="large" name="cloud-download-outline"></ion-icon></a></li>
        </ul>
    </header>
    
    <main>
       

        <?php
            require_once "Controllers/usersControllers.php";
            require_once "Controllers/mangaControllers.php";
        ?>
    </main>

    
       
        
    
</body>
</html>
