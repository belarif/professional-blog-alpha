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
            if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email'])
                && isset($_POST['password']) && isset($_POST['role']))
            {
                if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email'])
                    && !empty($_POST['password']) && !empty($_POST['role']))
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
                else
                {
                    throw new \Exception("tous les champs sont obligatoires");
                }
            }
        }
        catch (\Exception $e)
        {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage]);
        }
        echo $template->render();
    }

    public function editUserAction($template)
    {
        $id = $_GET['id'];
        $UserManager = new UserManager();
        $user = $UserManager->getUser($id);

        echo $template->render(['user' => $user]);
    }

    public function updateUserAction()
    {
        if(isset($_POST['id']) && isset($_POST['lastName']) && isset($_POST['firstName'])
            && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']))
        {
            if(!empty($_POST['id']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])
                && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role']))
            {
                $id = $_POST['id'];
                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                if(isset($_POST['submit']))
                {
                    $UserManager = new UserManager();
                    $UserManager->updateUser($id,$lastName,$firstName,$email,$password,$role);

                    header("Location: index.php?action=dashboard/listUsers");
                }
            }
        }
    }

    public function readUserAction($template)
    {
        $id = $_GET['id'];
        $UserManager = new UserManager();
        $user = $UserManager->getUser($id);

        echo $template->render(['user' => $user]);
    }

    public function deleteUserAction()
    {
        $id = $_GET['id'];
        $deleteUser = new UserManager();
        $deleteUser->deleteUser($id);

        header("Location: index.php?action=dashboard/listUsers");
    }
}



