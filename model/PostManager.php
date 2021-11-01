<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';


class PostManager extends Manager {

    public function createPost($title,$chapo,$author,$content,$published)
    {
        $db = $this->dbConnect();

        $query = $db->prepare(
            "INSERT INTO post(title, chapo, author, content, lastUpdate, createdAt, published) 
                    VALUES (:title, :chapo, :author, :content, :lastUpdate, :createdAt, :published)");

        $query->execute([
            'title' => $title,
            'chapo' => $chapo,
            'author' => $author,
            'content' => $content,
            'lastUpdate' => NULL,
            'createdAt' => date("Y-m-d H:i:s"),
            'published' => $published
        ]);


    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $posts = $db->query("SELECT * FROM post ORDER BY createdAt DESC");

        return $posts;
    }

    public function getPost($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("SELECT * FROM post WHERE id = :id");
        $query->execute(['id' => $id]);
        $post = $query->fetch();

        return $post;
    }

    public function updatePost($id,$title,$chapo,$author,$content,$published)
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "UPDATE post SET title = :title, chapo = :chapo, author = :author, 
                content = :content, lastUpdate = :lastUpdate, published = :published
                WHERE id = :id"
        );

        $query->execute([
            'title' => $title,
            'chapo' => $chapo,
            'author' => $author,
            'content' => $content,
            'lastUpdate' => date("Y-m-d H:i:s"),
            'published' => $published,
            'id' => $id,
        ]);

    }

    public function deletePost()
    {

    }

}

