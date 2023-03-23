<?php

$uri = $_SERVER['REQUEST_URI'];
if ($uri === "modele") {
    require_once "Model/userModel.php";
}

if ($uri=== "/index.php") {
    require_once "template/manga/manga.php" ;
}elseif ($uri === "/connexion") {
    if(isset($_POST["button"])){
        ChercherUser($pdo);
        header('location:/');
    }
    require_once "template/users/connexion.php";
}elseif ($uri === "/inscription") {
    if(isset($_POST["button"])){
        $messageError=VerifEmptyData();
        if (!$messageError) {
            createUser($pdo);
            header('location:/connexion');
        }
        
    }
    require_once "template/users/inscription.php";
}elseif ($uri === "/profil") {
    require_once "template/users/profil.php";
}elseif ($uri === "/modifyProfil") {
    if(isset($_POST["btnEnvoi"])){
        var_dump("cliqued");
        updateUser($pdo);
        //reloadSession($pdo);
        header("location:/profil");
    }
    require_once "Templates/users/inscription.php";
}

function VerifEmptyData()
{
    foreach ($_POST as $key => $value) {
        if (empty(str_replace(' ','',$value))) {
            $messageError[$key] = "Votre " . $key . " est vide !";
        }
    }
    if (isset($messageError)) {
        return $messageError;
    }
    else {
        return false;        
    }
    
}