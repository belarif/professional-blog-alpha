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
        echo $template->render(['d' => 'f']);
    }
}


