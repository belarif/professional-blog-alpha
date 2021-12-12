<?php

namespace App\Controller;

use App\Model\UserManager;
use Exception;


class UserController
{
    /**
     * @param $template
     */
    public function listUsers($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $logged_user = $_SESSION['logged_user'];
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $token = $_SESSION['token'];
                $UserManager = new UserManager();
                $listUsers = $UserManager->getUsers();

                echo $template->render(['listUsers' => $listUsers, 'logged_user' => $logged_user, 'token' => $token]);
            } else {
                header("Location:index.php?action=non-existent-backoffice-page");
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $template
     */
    public function addUserForm($template)
    {
        try {
            session_start();
            if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                $logged_user = $_SESSION['logged_user'];
                $token = $_SESSION['token'];
                if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                    $this->addUser($token);

                    echo $template->render(['logged_user' => $logged_user, 'token' => $token]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            } else {
                header("Location:index.php?action=login");
            }
        } catch (Exception $e) {
            $registerError = $e->getMessage();
            echo $template->render(['registerError' => $registerError, 'logged_user' => $logged_user, 'token' => $token]);
        }
    }

    /**
     * @param $token
     * @throws Exception
     */
    private function addUser($token)
    {
        if (isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
            if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])) {
                if (isset($_POST['submit'])) {

                    $lastName = strip_tags($_POST['lastName']);
                    $firstName = strip_tags($_POST['firstName']);
                    $email = strip_tags($_POST['email']);
                    $password = strip_tags($_POST['password']);
                    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
                    $role = $_POST['role'];

                    $userManager = new UserManager();
                    $user = $userManager->getLoginUser($email);
                    if (!$user) {
                        $userManager->createUser($lastName, $firstName, $email, $hashPassword, $role);
                        header("Location:index.php?action=dashboard/listUsers&token=$token");

                    } else {
                        throw new Exception("Un compte existe déjà avec l'adresse email : " . $email);
                    }
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        }
    }

    /**
     * @param $template
     */
    public function editUser($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $logged_user = $_SESSION['logged_user'];
                $token = $_SESSION['token'];
                $id = $_GET['id'];

                $UserManager = new UserManager();
                $user = $UserManager->getUser($id);
                $this->updateUser($token);

                if ($user) {
                    echo $template->render(['user' => $user, 'logged_user' => $logged_user, 'token' => $token]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            } else {
                header('Location:index.php?action=non-existent-backoffice-page');
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    /**
     * @param $token
     */
    private function updateUser($token)
    {
        try {
            if (isset($_POST['id']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
                if (!empty($_POST['id']) && !empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])) {

                    if (isset($_POST['submit'])) {
                        $id = $_POST['id'];
                        $lastName = strip_tags($_POST['lastName']);
                        $firstName = strip_tags($_POST['firstName']);
                        $email = strip_tags($_POST['email']);
                        $password = strip_tags($_POST['password']);
                        $hashPassword = password_hash($password, PASSWORD_BCRYPT);
                        $role = $_POST['role'];

                        $UserManager = new UserManager();
                        $UserManager->updateUser($id, $lastName, $firstName, $email, $hashPassword, $role);

                        header("Location:index.php?action=dashboard/listUsers&token=$token");
                    }
                }
            } else {
                throw new Exception("tous les champs sont obligatoires");
            }
        } catch (Exception $e) {
        }
    }

    /**
     * @param $template
     */
    public function readUser($template)
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['token']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && $_GET['token'] == $_SESSION['token']) {
                $logged_user = $_SESSION['logged_user'];
                $token = $_SESSION['token'];
                $id = $_GET['id'];
                $UserManager = new UserManager();
                $user = $UserManager->getUser($id);
                if ($user) {
                    echo $template->render(['user' => $user, 'logged_user' => $logged_user, 'token' => $token]);
                } else {
                    header('Location:index.php?action=non-existent-backoffice-page');
                }
            } else {
                header('Location:index.php?action=non-existent-backoffice-page');
            }
        } else {
            header("Location:index.php?action=login");
        }
    }

    public function deleteUser()
    {
        session_start();
        if (isset($_SESSION['logged_user']) && isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_GET['token']) && ($_GET['token'] == $_SESSION['token'])) {
                $token = $_SESSION['token'];
                $id = $_GET['id'];
                $userManager = new UserManager();
                $user = $userManager->getUser($id);
                if ($user) {
                    $userManager->deleteUser($id);
                    header("Location: index.php?action=dashboard/listUsers&token=$token");
                } else {
                    header("Location:index.php?action=non-existent-backoffice-page");
                }
            } else {
                header("Location:index.php?action=non-existent-backoffice-page");
            }
        } else {
            header("Location:index.php?action=login");
        }
    }
}



