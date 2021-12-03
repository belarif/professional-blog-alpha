Installation du projet : 

1. Copie du projet en local :

  1.1- Cliquez sur le bouton "code", puis sur la section HTTPS qui affiche l'url suivante : 
          https://github.com/belarif/professional-blog.git
  copiez cette url à utiliser pour installer le projet en local.

  1.2- Ouvrez le terminal de votre IDE. Si vous utilisez le server WampServer64, positionnez vous sur le chemin : c:/wamp64/www 
  grace à la commande: cd Comme suit: 	
          cd c:/wamp64/www
  Si vous utilisez un server autre que WampServer64, positionnez vous sur le chemin qui permettra l'exécution du site.

  1.3- Sur le meme chemin, tapez la commande suivante pour cloner le projet :
          git clone https://github.com/belarif/professional-blog.git
  Après exécution de la commande, le projet sera copié sur votre ordinateur

2. Installation des dépendances : 
  Toujours depuis votre terminal, exécutez la commande suivant :
          composer install
    
3. Base de données : 
  Depuis votre SGBD, importez le ficher .sql fourni, qui contient la base de données du projet.

4. Connexion à la base de données : 
  A la racine du projet, créez un fichier : .env ,dans lequel vous insérez les variables suivantes:

  DATABASE="dbname"
  USERNAME="user"
  PASSWORD="password"

  Remplacez les valeurs des variables USERNAME et PASSWORD par les identifiants que vous utilisez pour vous connecter à votre SGBD 
  et la valeur de la variable DATABASE par le nom du fichier .sql fourni.
 
5. Accès au site :

  Page d'accueil :  http://localhost/professional-blog/index.php?action=home
  Aspace administration du site :   http://localhost/professional-blog/index.php?action=dashboard
