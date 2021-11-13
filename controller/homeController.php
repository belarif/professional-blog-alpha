<?php

namespace ProfessionalBlog\Controller;

class HomeController
{
    public function homeAction($template)
    {

        try {
            if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['message']))
            {
                if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['message']))
                {
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $message = $_POST['message'];
                    $email = $_POST['email'];
                    $content = "<html>
                                    <head>
                                        <title>Message visiteur</title>
                                    </head>
                                    <body>
                                        <p>".$firstName."</p>
                                        <p>".$lastName."</p>
                                        <p>".$message."</p>
                                        <p>".$email."</p>
                                    </body>
                                </html>";

                    if(isset($_POST['submit']))
                    {
                        if (
                            mail("b.ocine@live.fr","test d'envoi d'e-mails",$content,"",
                                "From:hocine.belarif1@gmail.com".'\r\n'
                            )
                        )
                        {
                            throw new \Exception("l'email a été envoyé avec succès");
                        }
                        else
                        {
                            throw new \Exception("erreur d'envoi d'email");
                        }

                    }
                }
                else
                {
                    throw new \Exception("Veuillez renseigner tous les champs");
                }
            }

            echo $template->render();
        }
        catch (\Exception $e)
        {
            $errorMessage = $e->getMessage();
            echo $template->render(['errorMessage' => $errorMessage]);
        }
    }

}