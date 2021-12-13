<?php

namespace App\Controller;

use App\Model\CommentManager;
use App\Model\PostManager;
use App\Model\UserManager;
use Exception;
use Twig\TemplateWrapper;


class PostController
{
    /**
     * @param $template
     */
    public function addPostForm(TemplateWrapper $template)
    {
        try {
            session_start();
            if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                    $logged_user = $_SESSION['logged_user'];
                    $token = $_SESSION['token'];
                    $UserManager = new UserManager();
                    $users = $UserManager->getUsers();
                    $this->addPost($token);

                    echo $template->render(['users' => $users, 'logged_user' => $logged_user, 'token' => $token]);
                } else {
                    header("Location:index.php?action=non-existent-backoffice-page");
                }
            } else {
                header("Location:index.php?action=login");
            }
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage, 'users' => $users, 'logged_user' => $logged_user, 'token' => $token]);
        }
    }

    /**
     * @param $token
     * @throws Exception
     */
    private function addPost($token)
    {
        if (isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['user_id']) && isset($_POST['content']) && isset($_POST['published'])) {
            if (!empty($_POST['title']) && !empty($_POST['chapo']) && !empty($_POST['user_id']) && !empty($_POST['content']) && !empty($_POST['published'])) {
                if (isset($_POST['submit'])) {
                    $title = strip_tags($_POST['title']);
                    $chapo = strip_tags($_POST['chapo']);
                    $user_id = strip_tags($_POST['user_id']);
                    $content = strip_tags($_POST['content']);
                    $published = strip_tags($_POST['published']);

                    $PostManager = new PostManager();
                    $PostManager->createPost($title, $chapo, $user_id, $content, $published);
                    header("Location:index.php?action=dashboard/listPosts&token=$token");
                } else {
                    throw new Exception('Tous les champs sont obligatoires');
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        }
    }

    /**
     * @param $template
     */
    public function listPosts(TemplateWrapper $template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $logged_user = $_SESSION['logged_user'];
                $token = $_SESSION['token'];
                $postManager = new PostManager();
                $listPosts = $postManager->getPosts();

                echo $template->render(['listPosts' => $listPosts, 'logged_user' => $logged_user, 'token' => $token]);
            } else {
                header("Location:index.php?action=non-existent-backoffice-page");
            }
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
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $id = $_GET['id'];
                $postManager = new PostManager();
                $post = $postManager->getPost($id);

                if ($post) {
                    echo $template->render(['post' => $post, 'logged_user' => $logged_user, 'token' => $token]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
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
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $id = $_GET['id'];

                $postManager = new PostManager();
                $post = $postManager->getPost($id);
                $this->updatePost($token);

                if ($post) {
                    $UserManager = new UserManager();
                    $users = $UserManager->getUsers();

                    echo $template->render(['post' => $post, 'logged_user' => $logged_user, 'users' => $users, 'token' => $token]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            } else {
                header("Location:index.php?action=non-existent-backoffice-page");
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    private function updatePost($token)
    {
        try {
            if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['user_id']) && isset($_POST['content']) && isset($_POST['published'])) {
                $id = $_POST['id'];
                $title = strip_tags($_POST['title']);
                $chapo = strip_tags($_POST['chapo']);
                $user_id = strip_tags($_POST['user_id']);
                $content = strip_tags($_POST['content']);
                $published = $_POST['published'];

                if (isset($_POST['submit'])) {
                    $postManager = new PostManager();
                    $postManager->updatePost($id, $title, $chapo, $user_id, $content, $published);

                    header("Location:index.php?action=dashboard/listPosts&token=$token");
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        } catch (Exception $e) {
        }
    }

    public function deletePost()
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $id = $_GET['id'];
                $token = $_SESSION['token'];
                $postManager = new PostManager();
                $post = $postManager->getPost($id);

                if ($post) {
                    $postManager->deletePost($id);
                    header("Location:index.php?action=dashboard/listPosts&token=$token");
                } else {
                    header("Location:index.php?action=non-existent-backoffice-page");
                }
            } else {
                header("Location:index.php?action=non-existent-backoffice-page");
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function post($template)
    {
        session_start();
        $id = $_GET['id'];
        $commentManager = new CommentManager();
        $comments = $commentManager->getCommentsPost($id);

        $postManager = new PostManager();
        $post = $postManager->getPost($id);
        if ($post) {
            if (isset($_SESSION['logged_user'])) {
                $logged_user = $_SESSION['logged_user'];
                if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                    $token = $_SESSION['token'];
                    $this->commentPost($token, $id, $commentManager);

                    echo $template->render(['post' => $post, 'comments' => $comments, 'logged_user' => $logged_user, 'token' => $token]);
                } else {
                    $token = $_SESSION['token'];
                    header("Location:index.php?action=commentPost&id=$id&token=$token");
                }
            } else {
                $_SESSION['current_post_id'] = $id;

                echo $template->render(['post' => $post, 'comments' => $comments]);
            }
        } else {
            header('Location:index.php?action=non-existent-frontoffice-page');
        }
    }

    /**
     * @param $token
     * @param $id
     * @param $commentManager
     */
    private function commentPost($token, $id, $commentManager)
    {
        if (isset($_POST['content']) && !empty($_POST['content'])) {
            $post_id = $id;
            $content = strip_tags($_POST['content']);
            if (isset($_POST['submit'])) {
                $user_id = $_SESSION['id'];
                $commentManager->createComment($content, $post_id, $user_id);

                header("Location:index.php?action=commentPost&id=$post_id&token=$token");
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
            if (isset($_SESSION['token'])) {
                $token = $_SESSION['token'];
                $logged_user = $_SESSION['logged_user'];
                echo $template->render(['listPosts' => $listPosts, 'logged_user' => $logged_user, 'token' => $token]);
            } else {
                header('Location:index.php?action=non-existent-frontoffice-page');
            }
        }
    }
}
