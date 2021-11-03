
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

création d'un commentaire
INSERT INTO `comment`(`id`, `content`, `createdAt`, `isEnabled`, `user_id`, `post_id`)
VALUES ('','ceci est le commentaire de la publication d\'id 91','2021-10-03 12:22:12',0,1,91)

création d'utilisateur :
INSERT INTO `user`(`id`, `lastName`, `firstName`, `email`, `password`, `role`, `createdAt`)
VALUES ('','belarif','hocine','b.ocine@live.fr','toktok','administrateur','2021-11-03 00:07:00');