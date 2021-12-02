<?php

require('controller/postController.php');
require('controller/homeController.php');
require('controller/securityController.php');
require('controller/userController.php');
require('controller/commentController.php');

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(['view/frontoffice','view/backoffice','view/error']);
$twig = new \Twig\Environment($loader, [
    'cache' => '/var/cache',
    'auto_reload' => true,
    'strict_variables' => true,
    'debug' => true,
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/*** front office routes ***/
if($_GET['action'] == 'home')
{
    $template = $twig->load('home.html.twig');
    $homePage = new \professionalBlog\controller\HomeController();
    $homePage->home($template);
}
elseif($_GET['action'] == 'sendMessage')
{
    $template = $twig->load('home.html.twig');
    $homePage = new \professionalBlog\controller\HomeController();
    $homePage->sendMessage($template);
}
elseif($_GET['action'] == 'login')
{
    $template = $twig->load('login.html.twig');
    $login = new \ProfessionalBlog\Controller\SecurityController();
    $login->login($template);
}
elseif($_GET['action'] == 'logout')
{
    $logout = new \ProfessionalBlog\Controller\SecurityController();
    $logout->logout();
}
elseif ($_GET['action'] == 'register')
{
    $template = $twig->load('register.html.twig');
    $register = new \ProfessionalBlog\Controller\SecurityController();
    $register->register($template);

}
elseif($_GET['action'] == 'listPosts')
{
    $template = $twig->load('posts.html.twig');
    $postsPage = new \ProfessionalBlog\Controller\PostController();
    $postsPage->posts($template);
}
elseif ($_GET['action'] == 'post')
{
    if(isset($_GET['id']) && $_GET['id'] > 0)
    {
        $template = $twig->load('post.html.twig');
        $postPage = new \ProfessionalBlog\Controller\PostController();
        $postPage->post($template);
    }
    else
    {
        throw new Exception('Aucun blog post trouvé');
    }

}
elseif($_GET['action'] == 'non-existent-frontoffice-page')
{
    $template = $twig->load('frontoffice-404.html.twig');
    $error404 = new \ProfessionalBlog\Controller\SecurityController();
    $error404->frontofficeError($template);
}
/*** front office routes ***/

/*** back office routes ***/
elseif($_GET['action'] == 'dashboard')
{
    $template = $twig->load('dashboard.html.twig');
    $dashboard = new \ProfessionalBlog\Controller\SecurityController();
    $dashboard->dashboard($template);
}
elseif($_GET['action'] == 'non-existent-backoffice-page')
{
    $template = $twig->load('backoffice-404.html.twig');
    $error404 = new \ProfessionalBlog\Controller\SecurityController();
    $error404->backofficeError($template);
}

/*** routes posts management ***/
elseif($_GET['action'] == 'dashboard/listPosts')
{
    $template = $twig->load('listPosts.html.twig');
    $listPosts = new \ProfessionalBlog\Controller\PostController();
    $listPosts->listPosts($template);
}
elseif($_GET['action'] == 'dashboard/addPost')
{
    $template = $twig->load('addPost.html.twig');
    $addPost = new ProfessionalBlog\Controller\PostController();
    $addPost->addPost($template);
}
elseif ($_GET['action'] == 'dashboard/editPost')
{
    if(isset($_GET['id']) && $_GET['id'] > 0)
    {
        $template = $twig->load('editPost.html.twig');
        $editPost = new \ProfessionalBlog\Controller\PostController();
        $editPost->editPost($template);

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
        $updatePost->updatePost();
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
        $readPost->readPost($template);
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
        $deletePost->deletePost($template);
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
    $listComments->listComments($template);
}
elseif($_GET['action'] == 'dashboard/readComment')
{
    if(isset($_GET['id']) && $_GET['id'] > 0)
    {
        $template = $twig->load('readComment.html.twig');
        $readComment = new \ProfessilnalBlog\Controller\CommentController();
        $readComment->readComment($template);
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
        $editComment->editComment($template);
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
        $updateComment->updateComment();
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
        $deleteComment->deleteComment();
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
    $listUsers->listUsers($template);
}
elseif($_GET['action'] == 'dashboard/addUser')
{
    $template = $twig->load('addUser.html.twig');
    $addUser = new \ProfessionalBlog\Controller\UserController();
    $addUser->addUser($template);
}
elseif($_GET['action'] == 'dashboard/editUser')
{
    $template = $twig->load('editUser.html.twig');
    $editUser = new \ProfessionalBlog\Controller\UserController();
    $editUser->editUser($template);
}
elseif($_GET['action'] == 'dashboard/updateUser')
{
    if(isset($_POST['id']) && $_POST['id'] > 0)
    {
        $updateUser = new \ProfessionalBlog\Controller\UserController();
        $updateUser->updateUser();
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
        $readUser->readUser($template);
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
        $deleteUser->deleteUser();
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
    header("Location:index.php?action=non-existent-frontoffice-page");
}


