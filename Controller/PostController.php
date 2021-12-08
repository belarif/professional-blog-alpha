<?php

namespace App\Controller;

use App\Model\CommentManager;
use App\Model\PostManager;
use App\Model\UserManager;


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
                $title = $_POST['title'];
                $chapo = $_POST['chapo'];
                $user_id = $_POST['user_id'];
                $content = $_POST['content'];
                $published = $_POST['published'];

                if (isset($_POST['submit'])) {
                    $PostManager = new \ProfessionalBlog\Model\PostManager();
                    $PostManager->createPost($title, $chapo, $user_id, $content, $published);
                    header("Location:index.php?action=dashboard/listPosts");
                } else {
                    throw new \Exception('Tous les champs sont obligatoires');
                }
            }

            session_start();
            $logged_user = $_SESSION['logged_user'];
            $role = $_SESSION['role'];

            if ($logged_user && $role == 1) {

                $UserManager = new UserManager();
                $users = $UserManager->getUsers();

                echo $template->render(['users' => $users, 'logged_user' => $logged_user]);
            } else {
                header("Location:index.php?action=login");
            }

        } catch (\Exception $e) {
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
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1) {

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
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1) {
            $postManager = new PostManager();
            $id = $_GET['id'];

            $post = $postManager->getPost($id);

            if ($post) {
                echo $template->render(['post' => $post, 'logged_user' => $logged_user]);
            } else {
                header('Location:index.php?action=non-existent-backoffice-page');
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
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1) {
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
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function updatePost()
    {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['user_id'])
            && isset($_POST['content']) && isset($_POST['published'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $chapo = $_POST['chapo'];
            $user_id = $_POST['user_id'];
            $content = $_POST['content'];
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
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1) {
            $id = $_GET['id'];
            $postManager = new PostManager();
            $postManager->deletePost($id);
            header("Location:index.php?action=dashboard/listPosts");
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function post($template)
    {
        try {
            session_start();
            $id = $_GET['id'];
            $commentManager = new CommentManager();
            $comments = $commentManager->getCommentsPost($id);

            if (isset($_POST['content']) && !empty($_POST['content'])) {
                $post_id = $id;
                $content = strip_tags($_POST['content']);

                if (isset($_POST['submit'])) {
                    if (isset($_SESSION['logged_user'])) {
                        $user_id = $_SESSION['id'];

                        $commentManager->createComment($content, $post_id, $user_id);

                        header("Location:index.php?action=post&id=" . $post_id);

                    } else {
                        header("Location:index.php?action=post&id=" . $post_id);
                    }
                } else {
                    throw new \Exception("veuillez écrire votre commentaire");
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
        } catch (\Exception $e) {
            die('error:' . $e->getMessage());
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
