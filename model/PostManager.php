<?php

namespace Hocine\Blog\Model;

require_once 'model/Manager.php';

class PostManager extends Manager {

    function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('');
        return $req;
    }

    function getPost()
    {
        return 'bonjour';
    }

    function createPost()
    {

    }

    function updatePost()
    {

    }

    function deletePost()
    {

    }

}

