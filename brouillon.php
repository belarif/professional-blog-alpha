
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


/*** routes users management ***/
elseif($_GET['action'] == 'dashboard/listUsers')
{
$template = $twig->load('listUsers.html.twig');
listUsersAction($template);
}
elseif($_GET['action'] == 'dashboard/addUser')
{
$template = $twig->load('addUser.html.twig');
addUserAction($template);
}
elseif($_GET['action'] == 'dashboard/editUser')
{
$template = $twig->load('editUser.html.twig');
editUserAction($template);
}
elseif($_GET['action'] == 'dashboard/readUser')
{
if(isset($_GET['id']) && $_GET['id'] > 0)
{
$template = $twig->load('readUser.html.twig');
readUserAction($template);
}
else
{
throw new Exception('Aucun blog post trouvé');
}
}
/*** routes users management ***/


/*** routes comments management ***/
elseif($_GET['action'] == 'dashboard/listComments')
{
$template = $twig->load('listComments.html.twig');
listCommentsAction($template);
}
elseif($_GET['action'] == 'dashboard/readComment')
{
if(isset($_GET['id']) && $_GET['id'] > 0)
{
$template = $twig->load('readComment.html.twig');
readCommentAction($template);
}
else
{
throw new Exception('Aucun commentaire trouvé');
}
}
/*** routes comments management ***/
