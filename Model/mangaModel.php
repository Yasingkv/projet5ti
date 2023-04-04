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