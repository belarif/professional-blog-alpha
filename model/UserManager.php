<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';

class UserManager extends Manager {

    function getUsers()
    {
        $db = $this->dbConnect();
        $req = $db->query('');
        return $req;
    }

    function getUserAction()
    {

    }
}