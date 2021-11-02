<?php

namespace ProfessilnalBlog\Controller;

use ProfessionalBlog\Model\CommentManager;

require_once 'model\CommentManager.php';


class CommentController
{
    public function listCommentsAction($template)
    {
        $commentManager = new CommentManager();
        $listComments = $commentManager->getComments();

        echo $template->render(['listComments' => $listComments]);
    }

    public function readCommentAction($template)
    {
        $id = $_GET['id'];
        $commentManager = new CommentManager();
        $comment = $commentManager->getComment($id);

        echo $template->render(['comment' => $comment]);
    }

    public function editCommentAction($template)
    {
        $commentManager = new CommentManager();
        $editComment = $commentManager->getComment();

        echo $template->render(['editComment' => $editComment]);
    }


}


