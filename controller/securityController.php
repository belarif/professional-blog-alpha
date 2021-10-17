<?php

require('model/SecurityManager.php');

function login()
{
    require('view/frontoffice/login.html.twig');
}

function register()
{
    require('view/frontoffice/register.html.twig');
}