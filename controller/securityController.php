<?php

namespace ProfessionalBlog\Controller;

use ProfessionalBlog\Model\UserManager;

class SecurityController
{

    public function loginAction($template)
    {
        try
        {
            if(isset($_POST['email']) && isset($_POST['password']))
            {
                if(!empty($_POST['email']) && !empty($_POST['password']))
                {
                    $email = strip_tags($_POST['email']);
                    $password = strip_tags($_POST['password']);

                    if(isset($_POST['submit']))
                    {
                        $UserManager = new UserManager();
                        $user = $UserManager->getLoginUser($email);

                        if($user)
                        {
                            $hashPassword = $user['password'];
                            if(password_verify($password,$hashPassword))
                            {
                                session_start();
                                $_SESSION['logged_user'] = $user['lastName'];
                                $_SESSION['role'] = $user['role'];
                                $_SESSION['id'] = $user['id'];

                                if($_SESSION['logged_user'] && $_SESSION['role'] == 1)
                                {
                                    header("Location:index.php?action=dashboard");
                                }
                                else
                                {
                                    header("Location:index.php?action=home");
                                }

                            }
                            else
                            {
                                throw new \Exception("Mot de passe invalide !!");
                            }
                        }
                        else
                        {
                            throw new \Exception("Aucun compte existant avec l'adresse : $email");
                        }
                    }
                }
                else
                {
                    throw new \Exception("Veuillez renseigner votre email et/ou mot de passe");
                }
            }
            echo $template->render();
        }
        catch (\Exception $e)
        {
            $identificationError = $e->getMessage();
            echo $template->render(['identificationError' => $identificationError]);
        }

    }

    public function registerAction($template)
    {
        try
        {
            if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email'])
                && isset($_POST['password']))
            {
                if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email'])
                    && !empty($_POST['password']))
                {
                    $lastName = strip_tags($_POST['lastName']);
                    $firstName = strip_tags($_POST['firstName']);
                    $email = strip_tags($_POST['email']);
                    $password = strip_tags($_POST['password']);
                    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
                    $role = '2';

                    if(isset($_POST['submit']))
                    {
                        $UserManager = new UserManager();

                        $user = $UserManager->getLoginUser($email);
                        if(!$user)
                        {
                            $UserManager->createUser($lastName,$firstName,$email,$hashPassword,$role);
                            header("Location:index.php?action=login");
                        }
                        else
                        {
                            throw new \Exception("Un compte existe déjà avec l'adresse email : ".$email);
                        }
                    }
                }
                else
                {
                    throw new \Exception("Tous les champs sont obligatoires");
                }
            }
            echo $template->render();

        }
        catch (\Exception $e)
        {
            $registerError = $e->getMessage();
            echo $template->render(['registerError' => $registerError]);
        }

    }

    public function dashboardAction($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];

        if ($logged_user && $_SESSION['role'] == 1)
        {
            echo $template->render(['logged_user' => $logged_user]);
        }
        else
        {
            header("Location:index.php?action=login");
        }

    }

    public function logoutAction()
    {
        session_start();
        session_destroy();
        header("location:index.php?action=login");
    }

}
