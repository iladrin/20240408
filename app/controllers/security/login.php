<?php

require_once '../app/services/templates.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dump($_POST);
}

renderTemplate('security/login.php');
