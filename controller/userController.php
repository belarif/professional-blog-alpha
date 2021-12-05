<?php

namespace ProfessionalBlog\Controller;

use ProfessionalBlog\Model\UserManager;

require_once 'model/UserManager.php';

class UserController
{
    /**
     * @param $template
     */
    public function listUsers($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $UserManager = new UserManager();
            $listUsers = $UserManager->getUsers();

            echo $template->render(['listUsers' => $listUsers, 'logged_user' => $logged_user]);
        }
        else
        {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function addUser($template)
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
                    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
                    $role = $_POST['role'];

                    if(isset($_POST['submit']))
                    {
                        $UserManager = new UserManager();
                        $UserManager->createUser($lastName,$firstName,$email,$hashPassword,$role);
                        header("Location: index.php?action=dashboard/listUsers");
                    }
                }
                else
                {
                    throw new \Exception("tous les champs sont obligatoires");
                }
            }

            session_start();
            $logged_user = $_SESSION['logged_user'];
            $role = $_SESSION['role'];

            if ($logged_user && $role == 1)
            {
                echo $template->render(['logged_user' => $logged_user]);
            }
            else
            {
                header("Location:index.php?action=login");
            }
        }
        catch (\Exception $e)
        {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage]);
        }
    }

    /**
     * @param $template
     */
    public function editUser($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $UserManager = new UserManager();
            $user = $UserManager->getUser($id);

            if($user)
            {
                echo $template->render(['user' => $user, 'logged_user' => $logged_user]);
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

    public function updateUser()
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
                $hashPassword = password_hash($password,PASSWORD_BCRYPT);
                $role = $_POST['role'];

                if(isset($_POST['submit']))
                {
                    $UserManager = new UserManager();
                    $UserManager->updateUser($id,$lastName,$firstName,$email,$hashPassword,$role);

                    header("Location: index.php?action=dashboard/listUsers");
                }
            }
        }
    }

    /**
     * @param $template
     */
    public function readUser($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $UserManager = new UserManager();
            $user = $UserManager->getUser($id);

            if($user)
            {
                echo $template->render(['user' => $user, 'logged_user' => $logged_user]);
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

    public function deleteUser()
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        $role = $_SESSION['role'];

        if ($logged_user && $role == 1)
        {
            $id = $_GET['id'];
            $deleteUser = new UserManager();
            $deleteUser->deleteUser($id);
            header("Location: index.php?action=dashboard/listUsers");
        }
        else
        {
            header("Location:index.php?action=login");
        }
    }
}



