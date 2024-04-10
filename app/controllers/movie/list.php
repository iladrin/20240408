<?php

require_once '../app/services/templates.php';

$movies = [];
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