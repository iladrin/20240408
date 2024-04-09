<?php

function renderTemplate(string $template, array $data = []) : void
{
    $layout = 'base.php';

    ob_start();
    require TEMPLATES_PATH . '/' . $template;
    $body = ob_get_contents();
    ob_end_clean();

    require TEMPLATES_PATH . '/' . $layout;
}
