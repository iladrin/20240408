<?php

require_once '../app/services/templates.php';

$users = require '../app/data/users.php';

renderTemplate('user/list.php', ['users' => $users]);
