<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';

class UserManager extends Manager {

    public function getUsers()
    {
        $db = $this->dbConnect();
        $users = $db->query('SELECT * FROM user');

        return $users;

    }

    public function getUserAction()
    {

    }
}