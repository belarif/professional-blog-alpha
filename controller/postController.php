<?php

require_once 'model/PostManager.php';

function listPosts()
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $posts = $PostManager->getPosts();

    require('view/frontoffice/posts.html.twig');

}

function post()
{
    $PostManager = new Hocine\Blog\Model\PostManager();
    $post = $PostManager->getPost();

    require('view/frontoffice/post.html.twig');

}

function addPost()
{
    require('view/backoffice/addPost.html.twig');
}

function editPost()
{
    require('view/backoffice/editPost.html.twig');
}