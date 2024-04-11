<?php

require_once '../app/services/templates.php';

if (!isset($_GET['id'])) {
    renderTemplate('error.php');
    exit();
}

$movie = [];

$connection = getConnection();
$pdoStatement = $connection->prepare('SELECT * FROM movie WHERE id=:id');
$pdoStatement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$pdoStatement->execute();

$movie = $pdoStatement->fetch();

if ($movie === false) {
    renderTemplate('error.php');
    exit();
}


renderTemplate('movie/show.php', ['movie' => $movie]);
