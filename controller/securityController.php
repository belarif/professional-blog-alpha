<?php

function dashboardAction($template)
{
    echo $template->render(['d' => 'f']);
}