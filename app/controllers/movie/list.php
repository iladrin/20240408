<?php

use Symfony\Component\Yaml\Yaml;

$movies = Yaml::parseFile('../app/data/movies.yaml')['movies'];
writeLog('Movies loaded from YAML file', LOG_LEVEL_DEBUG);

require_once '../app/services/templates.php';

if (($file = @fopen('../app/data/movies.csv', 'r')) === false) {
    trigger_error('Unable to open movies file', E_USER_ERROR);
}

while (($data = fgetcsv($file)) !== false) {
    $movie = [
        'id' => $data[0],
        'title' => $data[1],
        'synopsis' => $data[2],
    ];

    $movies[] = $movie;
}

renderTemplate('movie/list.php', ['movies' => $movies]);
