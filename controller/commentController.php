<?php

require_once 'model\PostManager.php';

function listCommentsAction($template)
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $posts = $PostManager->getPosts();

    echo $template->render(['f' => 'g']);
}
