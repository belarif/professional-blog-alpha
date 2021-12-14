<?php

namespace App\Model;

class UserManager extends Manager
{

    public function getUsers()
    {
        $db = $this->dbConnect();
        return $db->query('
                    SELECT * FROM user 
                    ORDER BY createdAt DESC');
    }

    public function getUser($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("SELECT * FROM user WHERE id = :id");
        $query->execute([
            'id' => $id,
        ]);
        return $query->fetch();
    }

    public function getLoginUser($email)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("
                        SELECT * FROM user
                        WHERE email = :email
                        ");
        $query->execute([
            'email' => $email,
        ]);
        return $query->fetch();
    }

    public function createUser($lastName, $firstName, $email, $hashPassword, $role)
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "INSERT INTO user(lastName, firstName, email, password, role, createdAt) 
            VALUES (:lastName, :firstName, :email, :password, :role, :createdAt)");
        $query->execute([
            'lastName' => $lastName,
            'firstName' => $firstName,
            'email' => $email,
            'password' => $hashPassword,
            'role' => $role,
            'createdAt' => date("Y-m-d H:i:s"),
        ]);
    }

    public function updateUser($id, $lastName, $firstName, $email, $password, $role)
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

