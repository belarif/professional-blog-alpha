<?php

namespace Hocine\Blog\Model;

require_once 'model/Manager.php';

class PostManager extends Manager {

    function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, author, chapo, content FROM post
                            ORDER BY createdAt DESC LIMIT 0,5');
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

