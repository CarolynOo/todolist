<?php 

// Requête préparée pour parcourir le tableau USER :


$req=$bdd->prepare('SELECT login FROM user WHERE login=:login' );

$req->execute(':user', $user);

$req->fetchAll(PDO::FETCH_ASSOC);
