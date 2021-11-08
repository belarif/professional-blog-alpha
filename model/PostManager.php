<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';


class PostManager extends Manager {

    public function createPost($title,$chapo,$user_id,$content,$published)
    {
        $db = $this->dbConnect();

        $query = $db->prepare("INSERT INTO post(title, chapo, user_id, content, lastUpdate, createdAt, published) 
            VALUES (:title, :chapo, :user_id, :content, :lastUpdate, :createdAt, :published)");

        $query->execute([
            'title' => $title,
            'chapo' => $chapo,
            'user_id' => $user_id,
            'content' => $content,
            'lastUpdate' => date("Y-m-d H:i:s"),
            'createdAt' => date("Y-m-d H:i:s"),
            'published' => $published,
        ]);

    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $posts = $db->query("
            SELECT post.id, post.title, post.chapo, post.user_id, post.content, post.lastUpdate, 
            post.createdAt, post.published, user.lastName, user.firstName 
            FROM post
            INNER JOIN user
            ON post.user_id = user.id
            ORDER BY post.createdAt DESC
            ");

        return $posts;
    }

    public function getPost($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("
            SELECT post.id, post.title, post.chapo, post.user_id, post.content, post.lastUpdate, 
            post.createdAt, post.published, user.lastName AS lastnameAdmin, user.firstName AS firstnameAdmin
            FROM post
            INNER JOIN user
            ON post.user_id = user.id
            WHERE post.id = :id
            ORDER BY post.createdAt DESC
            ");

        $query->execute(['id' => $id]);
        $post = $query->fetch();

        return $post;
    }

    public function updatePost($id,$title,$chapo,$user_id,$content,$published)
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "UPDATE post SET title = :title, chapo = :chapo, user_id = :user_id, 
                content = :content, lastUpdate = :lastUpdate, published = :published
                WHERE id = :id"
        );

        $query->execute([
            'title' => $title,
            'chapo' => $chapo,
            'user_id' => $user_id,
            'content' => $content,
            'lastUpdate' => date("Y-m-d H:i:s"),
            'published' => $published,
            'id' => $id,
        ]);

    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare('DELETE FROM post WHERE id=:id');
        $query->execute([
            'id' => $id,
        ]);
    }

}

