<?php

namespace ProfessionalBlog\Model;

require_once 'model/Manager.php';

class CommentManager extends Manager
{

    public function getComments()
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "SELECT comment.id, comment.content, comment.createdAt, comment.isEnabled, post.title AS postTitle, 
            user.lastName AS lastnameAuthor, user.firstName AS firstnameAuthor
            FROM post
            INNER JOIN comment
            ON comment.post_id = post.id
            INNER JOIN  user
            ON comment.user_id = user.id
            ORDER BY comment.createdAt DESC"
        );
        $query->execute();
        $comments = $query->fetchAll();
        return $comments;
    }

    public function getComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare(
            "SELECT comment.id, comment.content, comment.createdAt, comment.isEnabled, post.title AS postTitle, 
            user.lastName AS lastnameAuthor, user.firstName AS firstnameAuthor
            FROM post
            INNER JOIN comment
            ON comment.post_id = post.id
            INNER JOIN  user
            ON comment.user_id = user.id
            WHERE comment.id = :id  
            ORDER BY comment.createdAt DESC"
        );
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

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $query = $db->prepare("DELETE FROM comment WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}