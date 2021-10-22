<?php

require_once 'model/UserManager.php';


function listUsersAction($template)
{
    $UserManager = new Hocine\Blog\Model\UserManager();
    $posts = $UserManager->getUsers();

    echo $template->render(['f' => 'g']);

}

function addUserAction($template)
{
    echo $template->render(['f' => 'k']);
}

function editUserAction($template)
{
    echo $template->render(['f' => 'l']);
}

function readUserAction($template)
{
    echo $template->render(['g' => 'e']);
}

