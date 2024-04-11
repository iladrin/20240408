<?php

require_once '../app/services/templates.php';

$users = require '../app/data/users.php';

if (!isGranted('ROLE_ADMIN')) {
    writeLog('Access denied for user on page "users"', LOG_LEVEL_DEBUG);
    header('location: ?page=homepage');
}

renderTemplate('user/list.php', ['users' => $users]);
