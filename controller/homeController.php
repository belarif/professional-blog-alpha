<?php

require 'model/HomeManager.php';

function homeAction($template)
{

    echo $template->render(['the' => 'here']);

}

