<?php

require_once 'model\CommentManager.php';

function listCommentsAction($template)
{
    $CommentManager = new Hocine\Blog\Model\CommentManager();
    $comments = $CommentManager->getComments();

    echo $template->render(['f' => 'g']);
}

function readCommentAction($template)
{
    echo $template->render(['d' => 'f']);
}
