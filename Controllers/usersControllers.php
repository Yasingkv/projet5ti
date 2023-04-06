<?php

$uri = $_SERVER['REQUEST_URI'];
require_once "Model/userModel.php";


if ($uri === "/connexion") {
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
    if(isset($_POST["button"])){
        updateUser($pdo);
        reloadSession($pdo);
        header("location:/profil");
    }
    require_once "template/users/inscription.php";
}elseif ($uri === "/deleteProfil") {
    deleteProfil($pdo);
    session_destroy();
    header("location:/inscription");

}elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
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