<?php

function renderTemplate(string $template) : void
{
    require TEMPLATES_PATH . $template;
}

