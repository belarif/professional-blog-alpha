<?php
require ('vendor/autoload.php');
/* routes à revoir (à reécrire URL rewriting)*/
require('controller/postController.php');
require('controller/homeController.php');
require('controller/securityController.php');


try
{
    if($_GET['action'] == 'home')
    {
        home();
    }
    elseif($_GET['action'] == 'login')
    {
        login();
    }
    elseif ($_GET['action'] == 'register')
    {
        register();
    }
    elseif($_GET['action'] == 'listPosts')
    {
        listPosts();
    }
    elseif($_GET['action'] == 'addPost')
    {
        addPost();
    }
    elseif ($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            post();
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
            editPost();
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
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

