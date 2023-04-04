<div class="flex wrap justify-content-space-around">
<?php foreach($livres as $livre) : ?>
    
        <div class="block taille encadrer">
            <img src="Images\Attack-on-Titan-Final-Season-image.png" alt="attaque des titans">
            <p><a href="https://attaque-des-titans.fandom.com/fr/wiki/Cat%C3%A9gorie:Informations_r%C3%A9v%C3%A9l%C3%A9es"><?= $livre->livreNom?></a></p>
            <p class="populariter"><?=$livre->livrePopulariter ?></p>
            <p> <?= $livre->livreSynopsis ?> </p>
        </div>
<?php endforeach ?>

</div>