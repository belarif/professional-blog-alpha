<?php

require_once 'model/PostManager.php';

function listPostsAction($template)
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $posts = $PostManager->getPosts();

    echo $template->render(['f' => 'g']);

}

function readPostAction($template)
{
    echo $template->render(['r' => 'j']);
}

function addPostAction($template)
{
    echo $template->render(['f' => 'f']);
}

function editPostAction($template)
{
    echo $template->render(['f' => 'g']);
}

function deletePostAction()
{

}

function postAction($template)
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $post = $PostManager->getPost();

    echo $template->render(['f' => 'l']);

}
