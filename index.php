<?php

/* routes à revoir (à reécrire URL rewriting)*/
require('controller/postController.php');
require('controller/homeController.php');
require('controller/securityController.php');

require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./view');
$twig = new \Twig\Environment($loader, [
    'cache' => '/var/cache', 'auto_reload' => true, 'strict_variables' => true,
]);


try
{
    if($_GET['action'] == 'home')
    {
        $template = $twig->load('home.html.twig');
        homeAction($template);
    }
    elseif($_GET['action'] == 'login')
    {
        $template = $twig->load('login_frontoffice.html.twig');
        loginAction($template);
    }
    elseif($_GET['action'] == 'adminLogin')
    {
        $template = $twig->load('login_backoffice.html.twig');
        loginAction($template);
    }
    elseif ($_GET['action'] == 'register')
    {
        $template = $twig->load('register.html.twig');
        registerAction($template);
    }
    elseif($_GET['action'] == 'listPosts')
    {
        $template = $twig->load('posts.html.twig');
        listPostsAction($template);
    }
    elseif($_GET['action'] == 'addPost')
    {
        $template = $twig->load('addPost.html.twig');
        addPostAction($template);
    }
    elseif ($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('post.html.twig');
            postAction($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }

    }
    elseif ($_GET['action'] == 'editPost')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('post.html.twig');
            editPost($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/listPosts')
    {
        $template = $twig->load('listPosts.html.twig');
        listPostsAction($template);
    }

    else
    {
        throw new Exception('404 - Page inexistante');
    }

}

catch (Exception $e)
{
    die('Error : ' .$e->getMessage());
}

