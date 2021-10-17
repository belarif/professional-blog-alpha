<?php

namespace Hocine\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=professional-blog-hocine;charset=utf8','root','');
        return $db;
    }
}