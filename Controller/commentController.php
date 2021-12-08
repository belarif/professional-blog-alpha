<?php

namespace ProfessilnalBlog\Controller;

use ProfessionalBlog\Model\CommentManager;

require_once 'model\CommentManager.php';


class CommentController
{

    /**
     * @param $template
     */
    public function listComments($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $commentManager = new CommentManager();
            $listComments = $commentManager->getComments();
            echo $template->render(['listComments' => $listComments, 'logged_user' => $logged_user]);
        }
        else
        {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function readComment($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $commentManager = new CommentManager();
            $comment = $commentManager->getComment($id);
            if($comment)
            {
                echo $template->render(['comment' => $comment, 'logged_user' => $logged_user]);
            }
            else
            {
                header('Location:index.php?action=non-existent-backoffice-page');
            }
        }
        else
        {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function editComment($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $commentManager = new CommentManager();
            $comment = $commentManager->getComment($id);
            if($comment)
            {
                echo $template->render(['comment' => $comment, 'logged_user' => $logged_user]);
            }
            else
            {
                header('Location:index.php?action=non-existent-backoffice-page');
            }

        }
        else
        {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @throws \Exception
     */
    public function updateComment()
    {
        if(!isset($_POST['id']) || !isset($_POST['isEnabled']))
        {
            throw new \Exception("tous les champs sont obligatoires");
        }
        else
        {
            $id = $_POST['id'];
            $isEnabled = $_POST['isEnabled'];
            if(isset($_POST['submit']))
            {
                $commentManager = new CommentManager();
                $commentManager->updateComment($id,$isEnabled);

                header("Location:index.php?action=dashboard/listComments");
            }
        }
    }

    public function deleteComment()
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $commentManager = new CommentManager();
            $commentManager->deleteComment($id);
            header("Location:index.php?action=dashboard/listComments");
        }
        else
        {
            header("Location:index.php?action=login");
        }
    }

}


