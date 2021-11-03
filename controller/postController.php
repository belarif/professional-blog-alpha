<?php

namespace ProfessionalBlog\Controller;

use ProfessionalBlog\Model\PostManager;

require_once 'model/PostManager.php';

class PostController {

    public function addPostAction($template)
    {
        try
        {
            if (!isset($_POST['title']) || !isset($_POST['chapo']) || !isset($_POST['author'])
                || !isset($_POST['content']) || !isset($_POST['published']))
            {
                if(empty($_POST['title']) || empty($_POST['chapo']) || empty($_POST['author'])
                    || empty($_POST['content']) || empty($_POST['published']))
                {
                    throw new \Exception('Tous les champs sont obligatoires');
                }
            }
            else
            {
                $title = $_POST['title'];
                $chapo = $_POST['chapo'];
                $author = $_POST['author'];
                $content = $_POST['content'];
                $published = $_POST['published'];
                if(isset($_POST['submit']))
                {
                    $PostManager = new \ProfessionalBlog\Model\PostManager();
                    $PostManager->createPost($title,$chapo,$author,$content,$published);

                    header("Location:index.php?action=dashboard/listPosts");
                }
            }
        }
        catch (\Exception $e)
        {

        }

        echo $template->render(['message' => 'message']);
    }

    public function listPostsAction($template)
    {
        $postManager = new PostManager();
        $listPosts = $postManager->getPosts();

        echo $template->render(['listPosts' => $listPosts]);

    }

    public function readPostAction($template)
    {
        $postManager = new PostManager();
        $id = $_GET['id'];
        $post = $postManager->getPost($id);

        echo $template->render(['post' => $post]);
    }

    public function editPostAction($template)
    {
        $id = $_GET['id'];
        $postManager = new PostManager();
        $post = $postManager->getPost($id);

        echo $template->render(['post' => $post]);
    }

    public function updatePostAction()
    {
        try
        {
            if (!isset($_POST['id']) || !isset($_POST['title']) || !isset($_POST['chapo']) || !isset($_POST['author'])
                || !isset($_POST['content']) || !isset($_POST['published']))
            {
                if(empty($_POST['id']) || empty($_POST['title']) || empty($_POST['chapo']) || empty($_POST['author'])
                    || empty($_POST['content']) || empty($_POST['published']))
                {
                    throw new \Exception('Tous les champs sont obligatoires');
                }
            }
            else
            {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $chapo = $_POST['chapo'];
                $author = $_POST['author'];
                $content = $_POST['content'];
                $published = $_POST['published'];

                if(isset($_POST['submit']))
                {
                    $postManager = new PostManager();
                    $postManager->updatePost($id,$title,$chapo,$author,$content,$published);

                    header("Location:index.php?action=dashboard/listPosts");
                }
            }
        }
        catch (\Exception $e)
        {

        }
    }

    public function deletePostAction($template)
    {
        $id = $_GET['id'];
        $postManager = new PostManager();
        $postManager->deletePost($id);
        $listPosts = $postManager->getPosts();
        echo $template->render(['listPosts' => $listPosts]);
    }

    public function postAction($template)
    {
        $id = $_GET['id'];
        $postManager = new PostManager();
        $post = $postManager->getPost($id);

        echo $template->render(['post' => $post]);

    }

    public function postsAction($template)
    {
        $postManager = new PostManager();
        $posts = $postManager->getPosts();

        echo $template->render(['posts' => $posts]);
    }

}
