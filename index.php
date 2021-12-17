<?php
session_start();

use App\Controller\CommentController;
use App\Controller\HomeController;
use App\Controller\PostController;
use App\Controller\SecurityController;
use App\Controller\UserController;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/vendor/autoload.php';

$loader = new FilesystemLoader(['view/frontoffice', 'view/backoffice', 'view/error']);

$twig = new Environment($loader, [
    'cache' => './var/cache',
    'auto_reload' => true,
    'strict_variables' => true,
    'debug' => true,
]);
$twig->addExtension(new DebugExtension());
$twig->addGlobal('session',$_SESSION);

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (!isset($_GET['action'])) {
    header("Location:index.php?action=home");
}

/*** front office routes ***/
elseif ($_GET['action'] == 'home') {
    $template = $twig->load('home.html.twig');
    $homePage = new HomeController();
    $homePage->home($template);
}
elseif ($_GET['action'] == 'sendMessage') {
    $template = $twig->load('home.html.twig');
    $homePage = new HomeController();
    $homePage->sendMessage($template);
}
elseif ($_GET['action'] == 'login') {
    $template = $twig->load('login.html.twig');
    $login = new SecurityController();
    $login->loginForm($template);
}
elseif ($_GET['action'] == 'logout') {
    $logout = new SecurityController();
    $logout->logout();
}
elseif ($_GET['action'] == 'register') {
    $template = $twig->load('register.html.twig');
    $register = new SecurityController();
    $register->register($template);

}
elseif ($_GET['action'] == 'listPosts') {
    $template = $twig->load('posts.html.twig');
    $postsPage = new PostController();
    $postsPage->posts($template);
}
elseif ($_GET['action'] == 'post') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $template = $twig->load('post.html.twig');
        $postPage = new PostController();
        $postPage->post($template);
    } else {
        header("Location:index.php?action=non-existent-frontoffice-page");
    }
}
elseif ($_GET['action'] == 'commentPost') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('post.html.twig');
        $postPage = new PostController();
        $postPage->post($template);
    } else {
        header("Location:index.php?action=non-existent-frontoffice-page");
    }
}
elseif ($_GET['action'] == 'non-existent-frontoffice-page') {
    $template = $twig->load('frontoffice-404.html.twig');
    $error404 = new SecurityController();
    $error404->frontOfficeError($template);
}
// front office routes

//back office routes
elseif ($_GET['action'] == 'dashboard') {
    $template = $twig->load('dashboard.html.twig');
    $dashboard = new SecurityController();
    $dashboard->dashboard($template);
}
elseif ($_GET['action'] == 'non-existent-backoffice-page') {
    $template = $twig->load('backoffice-404.html.twig');
    $error404 = new SecurityController();
    $error404->backOfficeError($template);
}
// routes posts management
elseif ($_GET['action'] == 'dashboard/listPosts') {
    if (isset($_GET['token'])) {
        $template = $twig->load('listPosts.html.twig');
        $listPosts = new PostController();
        $listPosts->listPosts($template);
    }else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/addPost') {
    if(isset($_GET['token'])){
        $template = $twig->load('addPost.html.twig');
        $addPost = new PostController();
        $addPost->addPostForm($template);
    }
    else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }

}
elseif ($_GET['action'] == 'dashboard/editPost') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('editPost.html.twig');
        $editPost = new PostController();
        $editPost->editPost($template);
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/readPost') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('readPost.html.twig');
        $readPost = new PostController();
        $readPost->readPost($template);
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/deletePost') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $deletePost = new PostController();
        $deletePost->deletePost();
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
// routes posts management
// routes comments management
elseif ($_GET['action'] == 'dashboard/listComments') {
    if (isset($_GET['token'])) {
    $template = $twig->load('listComments.html.twig');
    $listComments = new CommentController();
    $listComments->listComments($template);
    }else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/readComment') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('readComment.html.twig');
        $readComment = new CommentController();
        $readComment->readComment($template);
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/editComment') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('editComment.html.twig');
        $editComment = new CommentController();
        $editComment->editComment($template);
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/deleteComment') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $deleteComment = new CommentController();
        $deleteComment->deleteComment();
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
// routes comments management
// routes users management
elseif ($_GET['action'] == 'dashboard/listUsers') {
    if (isset($_GET['token'])) {
    $template = $twig->load('listUsers.html.twig');
    $listUsers = new UserController();
    $listUsers->listUsers($template);
    }else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/addUser') {
    if(isset($_GET['token'])){
        $template = $twig->load('addUser.html.twig');
        $addUser = new UserController();
        $addUser->addUserForm($template);
    }
    else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/editUser') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('editUser.html.twig');
        $editUser = new UserController();
        $editUser->editUser($template);
    }
    else{
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/readUser') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $template = $twig->load('readUser.html.twig');
        $readUser = new UserController();
        $readUser->readUser($template);
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
elseif ($_GET['action'] == 'dashboard/deleteUser') {
    if (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['token'])) {
        $deleteUser = new UserController();
        $deleteUser->deleteUser();
    } else {
        header("Location:index.php?action=non-existent-backoffice-page");
    }
}
// routes users management
// back office routes

else {
    header("Location:index.php?action=non-existent-frontoffice-page");
}



