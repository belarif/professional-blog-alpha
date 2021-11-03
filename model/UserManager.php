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

    public function createUser($lastName,$firstName,$email,$password,$role)
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "INSERT INTO user(lastName, firstName, email, password, role, createdAt) 
            VALUES (:lastName, :firstName, :email, :password, :role, :createdAt)");
        $query->execute([
           'lastName' => $lastName,
           'firstName' => $firstName,
           'email' => $email,
           'password' => $password,
           'role' => $role,
           'createdAt' => date("Y-m-d H:i:s"),
        ]);
    }
}