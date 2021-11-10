<?php

namespace ProfessionalBlog\Controller;

use ProfessionalBlog\Model\HomeManager;

require_once 'model/HomeManager.php';

class HomeController
{
    public function homeAction($template)
    {
        echo $template->render(['f' => 'f']);
    }

    public function sendMessageAction()
    {

    }
}


