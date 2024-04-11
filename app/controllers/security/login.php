<?php

require_once '../app/services/templates.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $users = require '../app/data/users.php';

    foreach ($users as $user) {
        if ($_POST['username'] === $user['username'] && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = [
                'username' => $user['username'],
                'firstName' => $user['firstName'],
                'roles' => $user['roles'],
            ];

            $location = $_SESSION['initial_page'] ?? 'homepage';
            header("location: ?page=$location");
        }
    }

    $errors[] = 'Compte non reconnu';
}

renderTemplate('security/login.php', ['errors' => $errors]);
