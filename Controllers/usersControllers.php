<?php





$uri = $_SERVER['REQUEST_URI'];
if ($uri === "modele") {
    require_once "Model/userModel.php";
}

if ($uri=== "/index.php") {
    require_once "template/users/index2.php" ;
}elseif ($uri === "/connexion") {
    require_once "template/users/connexion.php";
}elseif ($uri === "/inscription") {
    var_dump($_POST);
    if (isset($_POST["button"])) {
        //isset = est ce que ?
        createUser($pdo);  
    }
    require_once "template/users/inscription.php";
}elseif ($uri === "/profil") {
    require_once "template/users/profil.php";
}