<?php

require('model/SecurityManager.php');

function dashboardAction($template)
{
    echo $template->render(['d' => 'jh']);
}

function loginAction($template)
{
    echo $template->render(['a' => 'b']);
}

function registerAction($template)
{
    echo $template->render(['a' => 'b']);
}