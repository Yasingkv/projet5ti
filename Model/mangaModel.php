<?php

function selectAllmanga($pdo)
{
    try {
        $query = "SELECT * FROM livre";
        $selectAllManga = $pdo->prepare($query);
        $selectAllManga->execute();
        $livres = $selectAllManga->fetchAll();
        
        return $livres;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
    
}
function deleteAllUserManga ($pdo)
{
    try {
        $query = "SELECT * FROM livre where utilisateurID = ";
        $deleteoptionmanga = $pdo->prepare($query);
        $deleteoptionmanga->execute([
            'utilisateurID' => $_SESSION["user"]->id
        ]);
        $query = "delete * FROM livre where livreID in (SELECT livreID FROM livre where utilisateurID = :utilisateurID);";
        $deleteoptionmanga = $pdo->prepare($query);
        $deleteoptionmanga->execute([
            'utilisateurID' => $_SESSION["user"]->id
        ]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}