<?php

namespace App\Controller;

use App\Model\CommentManager;
use App\Model\PostManager;
use App\Model\UserManager;
use Exception;


class PostController
{
    /**
     * @param $template
     */
    public function addPost($template)
    {
        try {
            if (isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['user_id'])
                && isset($_POST['content']) && isset($_POST['published'])) {
                $title = strip_tags($_POST['title']);
                $chapo = strip_tags($_POST['chapo']);
                $user_id = strip_tags($_POST['user_id']);
                $content = strip_tags($_POST['content']);
                $published = strip_tags($_POST['published']);

                if (isset($_POST['submit'])) {
                    $PostManager = new PostManager();
                    $PostManager->createPost($title, $chapo, $user_id, $content, $published);
                    header("Location:index.php?action=dashboard/listPosts");
                } else {
                    throw new Exception('Tous les champs sont obligatoires');
                }
            }

            session_start();
            if (isset($_SESSION['logged_user']) && $_SESSION['role' == 1]) {
                $logged_user = $_SESSION['logged_user'];
                $UserManager = new UserManager();
                $users = $UserManager->getUsers();

                echo $template->render(['users' => $users, 'logged_user' => $logged_user]);
            } else {
                header("Location:index.php?action=login");
            }
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage]);
        }
    }

    /**
     * @param $template
     */
    public function listPosts($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            $postManager = new PostManager();
            $listPosts = $postManager->getPosts();

            echo $template->render(['listPosts' => $listPosts, 'logged_user' => $logged_user]);
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function readPost($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {

            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $postManager = new PostManager();
                $post = $postManager->getPost($id);

                if ($post) {
                    echo $template->render(['post' => $post, 'logged_user' => $logged_user]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function editPost($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['id'])) {

                $id = $_GET['id'];
                $postManager = new PostManager();
                $post = $postManager->getPost($id);

                if ($post) {
                    $UserManager = new UserManager();
                    $users = $UserManager->getUsers();

                    echo $template->render(['post' => $post, 'logged_user' => $logged_user, 'users' => $users]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    public function updatePost()
    {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['user_id'])
            && isset($_POST['content']) && isset($_POST['published'])) {
            $id = $_POST['id'];
            $title = strip_tags($_POST['title']);
            $chapo = strip_tags($_POST['chapo']);
            $user_id = strip_tags($_POST['user_id']);
            $content = strip_tags($_POST['content']);
            $published = $_POST['published'];

            if (isset($_POST['submit'])) {
                $postManager = new PostManager();
                $postManager->updatePost($id, $title, $chapo, $user_id, $content, $published);
                header("Location:index.php?action=dashboard/listPosts");
            }
        }
    }

    public function deletePost()
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $postManager = new PostManager();
                $postManager->deletePost($id);
                header("Location:index.php?action=dashboard/listPosts");
            } else {
                header("Location:index.php?action=login");
            }
        }
    }

    /**
     * @param $template
     */
    public function post($template)
    {
        session_start();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $commentManager = new CommentManager();
            $comments = $commentManager->getCommentsPost($id);

            if (isset($_POST['content']) && !empty($_POST['content'])) {
                $post_id = $id;
                $content = strip_tags($_POST['content']);

                if (isset($_POST['submit'])) {
                    $user_id = $_SESSION['id'];
                    $commentManager->createComment($content, $post_id, $user_id);
                    header("Location:index.php?action=post&id=" . $post_id);
                }
            }
            $postManager = new PostManager();
            $post = $postManager->getPost($id);
            if ($post) {
                if (!isset($_SESSION['logged_user'])) {
                    $_SESSION['current_post_id'] = $id;

                    echo $template->render(['post' => $post, 'comments' => $comments]);
                } else {
                    $logged_user = $_SESSION['logged_user'];

                    echo $template->render(['post' => $post, 'comments' => $comments, 'logged_user' => $logged_user]);
                }
            } else {
                header('Location:index.php?action=non-existent-frontoffice-page');
            }
        }
    }

    /**
     * @param $template
     */
    public function posts($template)
    {
        session_start();
        $postManager = new PostManager();
        $listPosts = $postManager->getPosts();

        if (!isset($_SESSION['logged_user'])) {
            echo $template->render(['listPosts' => $listPosts]);
        } else {
            $logged_user = $_SESSION['logged_user'];
            echo $template->render(['listPosts' => $listPosts, 'logged_user' => $logged_user]);
        }
    }
}
