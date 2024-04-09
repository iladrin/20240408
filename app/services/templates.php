<?php

function renderTemplate(string $template, array $data = []) : void
{
    require TEMPLATES_PATH . '/' . $template;
}
