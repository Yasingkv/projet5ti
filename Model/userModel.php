<?php

function createUser($pdo)
{
    try {
        $query = "insert into utilisateurs (nomUser, prenomUser,loginUser, passwordUser, role, emailUser) values :nomUser, :prenomUser, :loginUser, :passwordUser, :role, :emailUser )";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            "nomUser" => $_POST["txtNom"],
            "prenomUser" => $_POST["txtprenom"],
            "loginUser" => $_POST["txtlogin"],
            "passwordUser" => $_POST["txtMot_de_passe"],
            "role" => "User" ,
            "emailUser" => $_POST["txtEmail"],
        ]);
    } catch (PDOException $e) {
        // récupération du message de l'exception
        $message = $e->getMessage();
        die($message);
    }
}