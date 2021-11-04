
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

function dd($var){
echo "<pre>";
            var_dump($var);
            echo "</pre>";
die();
}

SELECT comment.content,comment.createdAt,comment.isEnabled,post.title,post.author
FROM comment
INNER JOIN post
ON comment.post_id = post.id
ORDER BY comment.createdAt DESC


public function addPostAction($template)
{
try
{
if (isset($_POST['title']) && isset($_POST['chapo']) && isset($_POST['author'])
&& isset($_POST['content']) && isset($_POST['published']))
{
if (!empty($_POST['title']) && !empty($_POST['chapo']) && !empty($_POST['author'])
&& !empty($_POST['content']) && !empty($_POST['published']))
{
$title = $_POST['title'];
$chapo = $_POST['chapo'];
$author = $_POST['author'];
$content = $_POST['content'];
$published = $_POST['published'];

if (isset($_POST['submit']))
{
$PostManager = new \ProfessionalBlog\Model\PostManager();
$PostManager->createPost($title, $chapo, $author, $content, $published);
header("Location:index.php?action=dashboard/listPosts");

}
}
else
{
throw new \Exception('Tous les champs sont obligatoires');
}
}
}
catch(\Exception $e)
{
$errorMessage = $e->getMessage();
echo $template->render(['errorMessage' => $errorMessage]);
}

echo $template->render();
}


public function updateCommentAction()
{
if(!isset($_POST['id']) || !isset($_POST['isEnabled']))
{
if(empty($_POST['id']) || empty($_POST['isEnabled']))
{
throw new \Exception("tous les champs sont obligatoires");
}
}
else
{
$id = $_POST['id'];
$isEnabled = $_POST['isEnabled'];
if(isset($_POST['submit']))
{
$commentManager = new CommentManager();
$commentManager->updateComment($id,$isEnabled);

header("Location:index.php?action=dashboard/listComments");
}
}
}