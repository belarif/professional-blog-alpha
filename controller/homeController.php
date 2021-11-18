<?php

namespace ProfessionalBlog\Controller;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

class HomeController
{
    public function homeAction($template)
    {
        session_start();
        $logged_user = $_SESSION['logged_user'];
        echo $template->render(['logged_user' => $logged_user]);
    }

    public function sendMessage()
    {
        try {
            if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
            {
                if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']))
                {
                    if(isset($_POST['submit']))
                    {
                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $message = $_POST['message'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $content = "<p><b>Nom : </b>".$lastName."</p>
                            <p><b>Pr&eacute;nom : </b>".$firstName."</p>
                            <p><b>Message : </b>".$message."</p>
                            <p><b>E-mail : </b>".$email."</p>
                            ";

                        $mail = new PHPMailer(true);

                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                        $mail->isSMTP();
                        $mail->Host       = 'smtp.gmail.com';
                        $mail->SMTPAuth   = true;
                        $mail->Username   = 'belarif.test@gmail.com';
                        $mail->Password   = 'EmailTest';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port       = 465;        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                        $mail->setFrom($email,$lastName);
                        $mail->addAddress('belarif.test@gmail.com');
                        $mail->isHTML(true);
                        $mail->Subject = $subject;
                        $mail->Body    = $content;

                        if ($mail->send())
                        {
                            header("location:index.php?action=home");
                        }
                        else{
                            echo 'error';
                        }
                    }
                }
                else
                {
                    throw new \Exception("Veuillez renseigner tous les champs");
                }
            }
        }
        catch (\Exception $e)
        {
            $errorMessage = $e->getMessage();
            /*echo $template->render(['errorMessage' => $errorMessage]);*/
        }
    }

}