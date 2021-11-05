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

    public function getUser($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("SELECT * FROM user WHERE id = :id");
        $query->execute([
            'id' => $id,
        ]);
        $user = $query->fetch();
        return $user;
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

    public function updateUser($id,$lastName,$firstName,$email,$password,$role)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("UPDATE user SET lastName = :lastName, firstName = :firstName, 
                email = :email, password = :password, role = :role 
                WHERE id = :id");
        $query->execute([
            'lastName' => $lastName,
            'firstName' => $firstName,
            'email' => $email,
            'password' => $password,
            'role' => $role,
            'id' => $id,
        ]);
    }

    public function deleteUser($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("DELETE FROM user WHERE id = :id");
        $query->execute([
           'id' => $id,
        ]);
    }
}
