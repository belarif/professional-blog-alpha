<?php

namespace ProfessionalBlog\Model;

use PDO;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname='.$_ENV['DATABASE'].';charset=utf8',$_ENV['USERNAME'],$_ENV['PASSWORD'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;
    }
}