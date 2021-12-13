<?php

namespace App\Controller;

use App\Model\CommentManager;
use Exception;
use Twig\TemplateWrapper;

class CommentController
{
    /**
     * @param $template
     */
    public function listComments(TemplateWrapper $template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $commentManager = new CommentManager();
                $listComments = $commentManager->getComments();
                echo $template->render(['listComments' => $listComments, 'logged_user' => $logged_user, 'token' => $token]);
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
    public function readComment(TemplateWrapper $template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $comment = $commentManager->getComment($id);
                if ($comment) {
                    echo $template->render(['comment' => $comment, 'logged_user' => $logged_user, 'token' => $token]);
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
    public function editComment(TemplateWrapper $template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $comment = $commentManager->getComment($id);
                $this->updateComment($token);

                if ($comment) {
                    echo $template->render(['comment' => $comment, 'logged_user' => $logged_user, 'token' => $token]);
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

    /**
     * @param $token
     * @throws Exception
     */
    private function updateComment($token)
    {
        try {
            if (isset($_POST['id']) && isset($_POST['isEnabled'])) {
                if (isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $isEnabled = $_POST['isEnabled'];
                    $commentManager = new CommentManager();
                    $commentManager->updateComment($id, $isEnabled);

                    header("Location:index.php?action=dashboard/listComments&token=$token");
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        } catch (Exception $e) {
        }
    }

    public function deleteComment()
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $comment = $commentManager->getComment($id);
                if ($comment) {
                    $commentManager->deleteComment($id);
                    header("Location:index.php?action=dashboard/listComments");
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
}




