<?php

/* routes à revoir (URL rewriting)*/
require('controller/postController.php');
require('controller/homeController.php');
require('controller/securityController.php');
require('controller/userController.php');
require('controller/commentController.php');

require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(['view/frontoffice','view/backoffice']);
$twig = new \Twig\Environment($loader, [
    'cache' => '/var/cache',
    'auto_reload' => true,
    'strict_variables' => true,
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

try
{
    /*** front office routes ***/
    if($_GET['action'] == 'home')
    {
        $template = $twig->load('home.html.twig');
        $homePage = new \professionalBlog\controller\HomeController();
        $homePage->homeAction($template);
    }
    elseif($_GET['action'] == 'login')
    {
        $template = $twig->load('login.html.twig');
        loginAction($template);
    }
    elseif($_GET['action'] == 'adminLogin')
    {
        $template = $twig->load('login.html.twig');
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
        $postsPage = new \ProfessionalBlog\Controller\PostController();
        $postsPage->postsAction($template);
    }
    elseif ($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('post.html.twig');
            $postPage = new \ProfessionalBlog\Controller\PostController();
            $postPage->postAction($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }

    }
    /*** front office routes ***/

    /*** back office routes ***/
    elseif($_GET['action'] == 'dashboard')
    {
        $template = $twig->load('dashboard.html.twig');
        dashboardAction($template);
    }

    /*** routes posts management ***/
    elseif($_GET['action'] == 'dashboard/listPosts')
    {
        $template = $twig->load('listPosts.html.twig');
        $listPostsPage = new \ProfessionalBlog\Controller\PostController();
        $listPostsPage->listPostsAction($template);
    }
    elseif($_GET['action'] == 'dashboard/addPost')
    {
        $template = $twig->load('addPost.html.twig');
        $addPost = new ProfessionalBlog\Controller\PostController();
        $addPost->addPostAction($template);
    }
    elseif ($_GET['action'] == 'dashboard/editPost')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('editPost.html.twig');
            $editPost = new \ProfessionalBlog\Controller\PostController();
            $editPost->editPostAction($template);

        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif ($_GET['action'] == 'dashboard/updatePost')
    {
        if(isset($_POST['id']) && $_POST['id'] > 0)
        {
            $updatePost = new \ProfessionalBlog\Controller\PostController();
            $updatePost->updatePostAction();
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/readPost')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('readPost.html.twig');
            $readPost = new \ProfessionalBlog\Controller\PostController();
            $readPost->readPostAction($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/deletePost')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('listPosts.html.twig');
            $deletePost = new \ProfessionalBlog\Controller\PostController();
            $deletePost->deletePostAction($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    /*** routes posts management ***/

    /*** routes comments management ***/
    elseif($_GET['action'] == 'dashboard/listComments')
    {
        $template = $twig->load('listComments.html.twig');
        $listComments = new \ProfessilnalBlog\Controller\CommentController();
        $listComments->listCommentsAction($template);
    }
    elseif($_GET['action'] == 'dashboard/readComment')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('readComment.html.twig');
            $readComment = new \ProfessilnalBlog\Controller\CommentController();
            $readComment->readCommentAction($template);
        }
        else
        {
            throw new Exception('Aucun commentaire trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/editComment')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('editComment.html.twig');
            $editComment = new \ProfessilnalBlog\Controller\CommentController();
            $editComment->editCommentAction($template);
        }
        else
        {
            throw new Exception('Aucun commentaire trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/updateComment')
    {
        if(isset($_POST['id']) && $_POST['id'] > 0)
        {
            $updateComment = new \ProfessilnalBlog\Controller\CommentController();
            $updateComment->updateCommentAction();
        }
        else
        {
            throw new Exception('Aucun commentaire trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/deleteComment')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $deleteComment = new \ProfessilnalBlog\Controller\CommentController();
            $deleteComment->deleteCommentAction();
        }
        else
        {
            throw new Exception('Aucun commentaire trouvé');
        }
    }
    /*** routes comments management ***/

    /*** routes users management ***/
    elseif($_GET['action'] == 'dashboard/listUsers')
    {
        $template = $twig->load('listUsers.html.twig');
        $listUsers = new \ProfessionalBlog\Controller\UserController();
        $listUsers->listUsersAction($template);
    }
    elseif($_GET['action'] == 'dashboard/addUser')
    {
        $template = $twig->load('addUser.html.twig');
        $addUser = new \ProfessionalBlog\Controller\UserController();
        $addUser->addUserAction($template);
    }
    elseif($_GET['action'] == 'dashboard/editUser')
    {
        $template = $twig->load('editUser.html.twig');
        $editUser = new \ProfessionalBlog\Controller\UserController();
        $editUser->editUserAction($template);
    }
    elseif($_GET['action'] == 'dashboard/updateUser')
    {
        if(isset($_POST['id']) && $_POST['id'] > 0)
        {
            $updateUser = new \ProfessionalBlog\Controller\UserController();
            $updateUser->updateUserAction();
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/readUser')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $template = $twig->load('readUser.html.twig');
            $readUser = new \ProfessionalBlog\Controller\UserController();
            $readUser->readUserAction($template);
        }
        else
        {
            throw new Exception('Aucun blog post trouvé');
        }
    }
    elseif($_GET['action'] == 'dashboard/deleteUser')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $deleteUser = new \ProfessionalBlog\Controller\UserController();
            $deleteUser->deleteUserAction();
        }
        else
        {
            throw new Exception('Aucun commentaire trouvé');
        }
    }
    /*** routes users management ***/
    /*** back office routes ***/

    else
    {
        throw new Exception('404 - Page inexistante');
    }

}

catch (Exception $e)
{
    die('Error : ' .$e->getMessage());
}

