<?php

// Connexion BDD
	try{

	$bdd = new PDO('mysql:host=localhost;dbname=todolist; charset=utf8', 'root', 'root');
	
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

//Gestion des erreurs -> Affiche message


	catch (PDOException $e) {

		echo'Connexion échouée : '. $e->getMessage();

	}