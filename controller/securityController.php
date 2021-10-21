<?php

require('model/SecurityManager.php');

function loginAction($template)
{
    echo $template->render(['a' => 'b']);
}

function registerAction($template)
{
    echo $template->render(['a' => 'b']);
}