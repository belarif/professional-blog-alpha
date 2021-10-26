<?php

namespace Hocine\Blog\model;

require_once 'model/Manager.php';

class SecurityManager extends Manager {

    function authentification()
    {
        $db = $this->dbConnect();
        $req = $db->query('');
        return $req;
    }

    function registration()
    {
        echo 'data not available yet';
    }
}