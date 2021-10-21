<?php

require_once 'model/PostManager.php';

function listPostsAction($template)
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $posts = $PostManager->getPosts();

    echo $template->render(['f' => 'g']);

}

function postAction($template)
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $post = $PostManager->getPost();

    echo $template->render(['f' => 'l']);

}

function addPostAction($template)
{
    echo $template->render(['f' => 'f']);
}

function editPost($template)
{
    echo $template->render(['f' => 'g']);
}