<?php

namespace App\Controller;

class FlashMessageController
{
    public function successCommentPost()
    {
        $_SESSION['flash']['success'][] = "Votre commentaire est transmis pour validation";
        $_SESSION['flash']['error'][] = "Echec d'envoi de commentaire !";
    }

    public function successSendMessage()
    {
        $_SESSION['flash']['success'][] = "Votre message est envoyé avec succès";
        $_SESSION['flash']['error'][] = "Echec d'envoi de votre message";
    }

    public function successRegister()
    {
        $_SESSION['flash']['success'][] = "Vous vous êtes inscrit avec succès. Désomais,vous pouvez vous connecter";
        $_SESSION['flash']['error'][] = "Echec d'envoi de votre message";
    }
}

