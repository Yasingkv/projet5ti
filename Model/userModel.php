<?php

function createUser($pdo){
    try {
        $query = "insert into utilisateur(utilisateurNom, utilisateurMDP, utilisateurRole, utilisateurMail) values (:nomUser, :passWordUser, :role, :mail)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST['nom'],
            'passWordUser' => $_POST['mot_de_passe'],
            'role' => 'user',
            'mail' => $_POST['email'],
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function ChercherUser($pdo){
    try {
        $query = "select * from utilisateur where utilisateurMail=:mail and utilisateurMDP=:passWordUser";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'mail' => $_POST['email'],
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
        $query = "UPDATE utilisateur SET utilisateurNom = :nomUser, utilisateurMDP = :passWordUser, utilisateurMail = :emailUser WHERE id = :id";
        $updateUser = $pdo->prepare($query);
        $updateUser->execute([
            'nomUser' => $_POST['nom'],
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
        $query = "select * from utilisateur where id = :id";
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

/*try {
    $query = "SELECT * FROM biens";
    $ajoute = $pdo->prepare($query);
    $ajoute->execute();
    $biens = $ajoute->fetchAll();
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}
echo '<pre>' , var_dump($biens) , '</pre>';*/