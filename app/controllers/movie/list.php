<?php

use Symfony\Component\Yaml\Yaml;


function getMoviesFromCSV(): array
{
    if (($file = @fopen('../app/data/movies.csv', 'r')) === false) {
        trigger_error('Unable to open movies file', E_USER_ERROR);
    }

    $movies = [];
    while (($data = fgetcsv($file)) !== false) {
        $movie = [
            'id' => $data[0],
            'title' => $data[1],
            'synopsis' => $data[2],
        ];

        $movies[] = $movie;
    }

    writeLog('Movies loaded from CSV file', LOG_LEVEL_DEBUG);
    return $movies;
}

function getMoviesFromYAML(): array
{
    writeLog('Movies loaded from YAML file', LOG_LEVEL_DEBUG);
    return Yaml::parseFile('../app/data/movies.yaml')['movies'];
}

function getMoviesFromDatabase(): array
{
    $movies = [];

    $connection = getConnection();
    $pdoStatement = $connection->query('SELECT * FROM movie');
    $movies = $pdoStatement->fetchAll();

    writeLog('Movies loaded from database', LOG_LEVEL_DEBUG);
    return $movies;
}


require_once '../app/services/templates.php';

$movies = getMoviesFromDatabase();

renderTemplate('movie/list.php', ['movies' => $movies]);
