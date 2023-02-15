<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri=== "/index.php") {
    require_once "template/users/index2.php" ;
}elseif ($uri === "/connexion") {
    require_once "template/users/connexion.php";
}elseif ($uri === "/inscription") {
    require_once "template/users/inscription.php";
}elseif ($uri === "/profil") {
    require_once "template/users/profil.php";
}