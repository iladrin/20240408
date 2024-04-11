<?php

function isAuthenticated(): bool
{
    return isset($_SESSION['user']);
}

function isGranted(string $role): bool
{
    if (strpos($role, 'ROLE_') !== 0) {
        trigger_error('Roles always begin with "ROLE_"');
    }

    if (!isAuthenticated()) {
        $_SESSION['initial_page'] = $_GET['page'];
        header('Location: ?page=login');
    }

    return in_array($role, $_SESSION['user']['roles']);
}
