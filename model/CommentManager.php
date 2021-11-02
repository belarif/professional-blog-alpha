<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';

class CommentManager extends Manager
{

    public function getComments()
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "SELECT comment.id,comment.content,comment.createdAt,comment.isEnabled,post.title AS postTitle,post.author AS postAuthor
            FROM comment
            INNER JOIN post
            ON comment.post_id = post.id
            ORDER BY comment.createdAt DESC"
        );
        $query->execute();
        $comments = $query->fetchAll();
        return $comments;
    }

    public function getComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("SELECT comment.id,comment.content,comment.createdAt,comment.isEnabled,post.title AS postTitle,post.author AS postAuthor
            FROM comment
            INNER JOIN post
            ON comment.post_id = post.id
            WHERE comment.id = :id");
        $query->execute([
            'id' => $id,
        ]);
        $post = $query->fetch();

        return $post;
    }

    public function updateComment($id,$isEnabled)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("UPDATE comment SET isEnabled = :isEnabled WHERE id = :id");
        $query->execute([
            'id' => $id,
            'isEnabled' => $isEnabled,
        ]);
    }

}