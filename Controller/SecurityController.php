<?php

namespace App\Controller;

use App\Model\UserManager;
use App\Tools\FlashMessageTool;
use Exception;
use Twig\TemplateWrapper;

class SecurityController
{
    /**
     * @param TemplateWrapper $template
     */
    public function loginForm(TemplateWrapper $template)
    {
        try {
            if (isset($_SESSION['flash'])) {
                unset($_SESSION['flash']);
            }
            $this->login();

            echo $template->render();
        } catch (Exception $e) {
            $identificationError = $e->getMessage();
            echo $template->render(['identificationError' => $identificationError]);
        }
    }

    /**
     * @throws Exception
     */
    private function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                if (isset($_POST['submit'])) {
                    $email = strip_tags($_POST['email']);
                    $password = strip_tags($_POST['password']);

                    $this->verifyLoggedUser($email, $password);

                } else {
                    throw new Exception("Veuillez renseigner votre email et/ou mot de passe");
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        }
    }

    /**
     * @param $email
     * @param $password
     * @throws Exception
     */
    private function verifyLoggedUser($email, $password)
    {
        $UserManager = new UserManager();
        $user = $UserManager->getLoginUser($email);
        if ($user) {
            $hashPassword = $user['password'];
            if (password_verify($password, $hashPassword)) {
                $_SESSION['logged_user'] = $user['lastName'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['id'] = $user['id'];

                $this->redirectUser();
            } else {
                throw new Exception("Mot de passe invalide !!");
            }
        } else {
            throw new Exception("Aucun compte existant avec l'adresse : $email");
        }
    }

    private function redirectUser()
    {
        if (isset($_SESSION['logged_user'])) {
            if (!isset($_SESSION['token'])) {
                $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(20));
            }
            $token = $_SESSION['token'];
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                header("Location:index.php?action=dashboard");
            } else {
                if (isset($_SESSION['current_post_id']) && $_SESSION['current_post_id'] !== null) {
                    $post_id = $_SESSION['current_post_id'];
                    $_SESSION['current_post_id'] = null;
                    header("Location:index.php?action=commentPost&id=$post_id&token=$token");
                } else {
                    header("Location:index.php?action=listPosts");
                }
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param TemplateWrapper $template
     */
    public function register(TemplateWrapper $template)
    {
        try {
            if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password'])) {
                if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                    if (isset($_POST['submit'])) {
                        $lastName = strip_tags($_POST['lastName']);
                        $firstName = strip_tags($_POST['firstName']);
                        $email = strip_tags($_POST['email']);
                        $password = strip_tags($_POST['password']);
                        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
                        $role = '2';
                        $this->verifyRegisterUser($email, $lastName, $firstName, $hashPassword, $role);
                    }
                } else {
                    throw new Exception("Tous les champs sont obligatoires");
                }
            }

            echo $template->render();

        } catch (Exception $e) {
            $registerError = $e->getMessage();
            echo $template->render(['registerError' => $registerError]);
        }
    }

    /**
     * @throws Exception
     */
    private function verifyRegisterUser($email, $lastName, $firstName, $hashPassword, $role)
    {
        $UserManager = new UserManager();
        $user = $UserManager->getLoginUser($email);
        if (!$user) {
            $UserManager->createUser($lastName, $firstName, $email, $hashPassword, $role);
            FlashMessageTool::successRegister();

            header("Location:index.php?action=login");
        } else {
            throw new Exception("Un compte existe déjà avec l'adresse email : " . $email);
        }
    }

    /**
     * @param TemplateWrapper $template
     */
    public function dashboard(TemplateWrapper $template)
    {
        if (isset($_SESSION['logged_user']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            $token = $_SESSION['token'];
            echo $template->render(['logged_user' => $logged_user, 'token' => $token]);
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param TemplateWrapper $template
     */
    public function frontOfficeError(TemplateWrapper $template)
    {
        if (!isset($_SESSION['logged_user'])) {
            echo $template->render();
        } else {
            $logged_user = $_SESSION['logged_user'];
            echo $template->render(['logged_user' => $logged_user]);
        }
    }

    /**
     * @param TemplateWrapper $template
     */
    public function backOfficeError(TemplateWrapper $template)
    {
        if (!isset($_SESSION['logged_user'])) {
            echo $template->render();
        } else {
            $logged_user = $_SESSION['logged_user'];
            $token = $_SESSION['token'];
            echo $template->render(['logged_user' => $logged_user, 'token' => $token]);
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?action=home");
    }
}


