<?php 

session_start();
// Requête préparée pour insérer Login, password et email avec valeur inconnue:

$req=$bdd->prepare('INSERT INTO user SET login=?, email=?, password=?');

// Exécution de la requête qui va maintenant tout envoyer sur la BDD:

$req->execute([$_POST['login'], $_POST['email'], $password]);






