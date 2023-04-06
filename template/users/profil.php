
        <h1>Votre page profil</h1>
        <ol>
            <div>
                <li>Nom</li>
                    <p style="font-size: large;"><?= $_SESSION['user']->utilisateurNom ?></p>
            </div>
            <div>
                <li>Photo de profil</li>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <img id="imageProfil" src="Images/profil.png" alt="Mon image de profil">
            </div>
        </ol>

<a href="/modifyProfil">Modifier votre profil</a>
<a href="/deleteProfil">supprimer votre profil</a>
    
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>