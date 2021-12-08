<?php

namespace App\Controller;

use App\Model\CommentManager;
use Exception;

class CommentController
{
    /**
     * @param $template
     */
    public function listComments($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            $commentManager = new CommentManager();
            $listComments = $commentManager->getComments();
            echo $template->render(['listComments' => $listComments, 'logged_user' => $logged_user]);
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function readComment($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $comment = $commentManager->getComment($id);
                if ($comment) {
                    echo $template->render(['comment' => $comment, 'logged_user' => $logged_user]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            } else {
                header("Location:index.php?action=login");
            }
        }
    }

    /**
     * @param $template
     */
    public function editComment($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $comment = $commentManager->getComment($id);
                if ($comment) {
                    echo $template->render(['comment' => $comment, 'logged_user' => $logged_user]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }

            } else {
                header("Location:index.php?action=login");
            }
        }
    }

    /**
     * @throws Exception
     */
    public function updateComment()
    {
        if (!isset($_POST['id']) || !isset($_POST['isEnabled'])) {
            throw new Exception("tous les champs sont obligatoires");
        } else {
            $id = strip_tags($_POST['id']);
            $isEnabled = strip_tags($_POST['isEnabled']);
            if (isset($_POST['submit'])) {
                $commentManager = new CommentManager();
                $commentManager->updateComment($id, $isEnabled);

                header("Location:index.php?action=dashboard/listComments");
            }
        }
    }

    public function deleteComment()
    {
        session_start();
        if (isset($_SESSION['logged_user']) && $_SESSION['role'] == 1) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $commentManager = new CommentManager();
                $commentManager->deleteComment($id);
                header("Location:index.php?action=dashboard/listComments");
            } else {
                header("Location:index.php?action=login");
            }
        }
    }
}

