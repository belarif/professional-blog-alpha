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
                                header("Location:index.php?action=listPosts");
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
                && isset($_POST['password']) && isset($_POST['role']))
            {
                if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email'])
                    && !empty($_POST['password']) && !empty($_POST['role']))
                {
                    $lastName = strip_tags($_POST['lastName']);
                    $firstName = strip_tags($_POST['firstName']);
                    $email = strip_tags($_POST['email']);
                    $password = strip_tags($_POST['password']);
                    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
                    $role = strip_tags($_POST['role']);

                    if(isset($_POST['submit']))
                    {
                        $UserManager = new UserManager();
                        $UserManager->createUser($lastName,$firstName,$email,$hashPassword,$role);

                        $successMessage = "Vous vous êtes inscrit avec succès";
                        echo $template->render(['successMessage' => $successMessage]);

                    }
                }
                else
                {
                    throw new \Exception("tous les champs sont obligatoires");
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

}
