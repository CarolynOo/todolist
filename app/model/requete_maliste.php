<?php 

// Requête préparée pour insérer labeltache, description avec valeur inconnue:

/*$req=$bdd->prepare("INSERT INTO tache (user_id, labeltache, description) VALUES (?, ?, ?)");

$req->execute(array(

	$_SESSION['id'],
	$_POST['labeltache'],
	$_POST['description']

)); */

$_SESSION['id_user']=$bdd->prepare('SELECT id FROM user WHERE login=:login' );

$req=$bdd->prepare('INSERT INTO tache (id_user, titre, description) VALUES (?, ?, ?)');

// Exécution de la requête qui va maintenant tout envoyer sur la BDD:

$req->execute([$_SESSION['id_user'],$_POST['titre'],$_POST['description']]);





/*ALTER TABLE `todos`
  ADD CONSTRAINT `fk_todos_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE; */




