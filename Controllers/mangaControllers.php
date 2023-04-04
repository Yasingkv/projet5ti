<?php
$uri = $_SERVER['REQUEST_URI'];

require_once "Model/mangaModel.php";

if ($uri=== "/index.php" || $uri=== "/") {
    $livres = selectAllmanga($pdo);
    require_once "template/manga/manga.php";
    var_dump("test");
}