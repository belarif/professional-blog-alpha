<?php

namespace ProfessionalBlog\Controller;

class HomeController
{
    public function homeAction($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];

        echo $template->render(['logged_user' => $logged_user]);
    }

    public function sendMessageAction()
    {

    }
}


