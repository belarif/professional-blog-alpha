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
        try
        {
            if(!isset($_POST['lastName']) || !isset($_POST['firstName']) || !isset($_POST['email'])
                || !isset($_POST['password']) || !isset($_POST['role']))
            {
                if(empty($_POST['lastName']) || empty($_POST['firstName']) || empty($_POST['email'])
                    || empty($_POST['password']) || empty($_POST['role']))
                {

                    throw new \Exception("tous les champs sont obligatoires");

                }
            }
            else
            {
                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                if(isset($_POST['submit']))
                {
                    $UserManager = new UserManager();
                    $UserManager->createUser($lastName,$firstName,$email,$password,$role);

                    header("Location: index.php?action=dashboard/listUsers");
                }
            }
        }
        catch (\Exception $e)
        {

        }

        echo $template->render(['f' => 'e']);

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



