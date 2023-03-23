<?php

function createUser($pdo){
    try {
        $query = "insert into utilisateurs(nomUser, prenomUser, loginUser, passWordUser, role) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :role)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mot_de_passe'],
            'role' => 'user'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function ChercherUser($pdo){
    try {
        $query = "select * from utilisateurs where loginUser=:loginUser and passWordUser=:passWordUser";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mot_de_passe']
        ]);
        $user=$chercheUser -> fetch();
       
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function updateUser($pdo)
{
    try {
        $query = "UPDATE utilisateurs SET nomUser = :nomUser, prenomUser = :prenomUser, passWordUser = :passWordUser, emailUser = :emailUser WHERE id = :id";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'emailUser' => $_POST['email'],
            'passWordUser' => $_POST['mot_de_passe'],
            'id' => $_SESSION["user"]->id
        ]);
        reloadSession($pdo);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function reloadSession($pdo)
{
    try {
        $query = "select * from utilisateurs where id = :id";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'id' => $_SESSION["user"]->id
        ]);
        $user=$chercheUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
