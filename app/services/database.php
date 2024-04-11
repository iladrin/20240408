<?php

function getConnection(): PDO
{
    static $connection = null;

    if ($connection === null) {
        try {
            $connection = new PDO($_ENV['DB_DSN'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $pe) {
            writeLog('Unable to reach the database: ' . $pe->getMessage(), LOG_LEVEL_EMERGENCY);
            renderTemplate('error.php');
            exit();
        }
    }

    return $connection;
}
