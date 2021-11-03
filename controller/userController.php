<?php

namespace ProfessionalBlog\Controller;

use ProfessionalBlog\Model\UserManager;

require_once 'model/UserManager.php';

class UserController
{
    public function listUsersAction($template)
    {
        $UserManager = new UserManager();
        $listUsers = $UserManager->getUsers();

        echo $template->render(['listUsers' => $listUsers]);

    }

    public function addUserAction($template)
    {
        echo $template->render(['f' => 'k']);
    }

    public function editUserAction($template)
    {
        echo $template->render(['f' => 'l']);
    }

    public function readUserAction($template)
    {
        echo $template->render(['g' => 'e']);
    }
}



