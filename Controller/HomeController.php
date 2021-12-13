<?php

namespace App\Controller;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Twig\TemplateWrapper;

class HomeController
{
    /**
     * @param $template
     */
    public function home(TemplateWrapper $template)
    {
        session_start();
        if (!isset($_SESSION['logged_user'])) {
            echo $template->render();
        } else {
            $logged_user = $_SESSION['logged_user'];
            echo $template->render(['logged_user' => $logged_user]);
        }
    }

    /**
     * @param $template
     */
    public function sendMessage(TemplateWrapper $template)
    {
        try {
            if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                    if (isset($_POST['submit'])) {
                        $firstName = strip_tags($_POST['firstName']);
                        $lastName = strip_tags($_POST['lastName']);
                        $message = strip_tags($_POST['message']);
                        $email = strip_tags($_POST['email']);
                        $subject = strip_tags($_POST['subject']);
                        $content = "<p><b>Nom : </b>" . $lastName . "</p>
                            <p><b>Pr&eacute;nom : </b>" . $firstName . "</p>
                            <p><b>Message : </b>" . $message . "</p>
                            <p><b>E-mail : </b>" . $email . "</p>
                            ";

                        $mail = new PHPMailer(true);

                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'belarif.test@gmail.com';
                        $mail->Password = 'EmailTest';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port = 465;        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                        $mail->setFrom($email, $lastName);
                        $mail->addAddress('belarif.test@gmail.com');
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body = $content;

                        if ($mail->send()) {
                            header("location:index.php?action=home");
                            unset($mail);
                        } else {
                            throw new Exception("Echec d'envoi de votre email");
                        }
                    }
                } else {
                    throw new Exception("Veuillez renseigner tous les champs");
                }
            }
            echo $template->render();
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage]);
        }
    }
}


