<?php



if (isset($_POST['bouton_connexion'])) {

	$login=$_POST['login'];
	$password=$_POST['password'];

	echo 'coucou';

	if (($login ==true) AND($password ==true) ){


		require '../model/connexion_bdd.php';

		require '../model/requete_connexion.php';


		session_start();

		$_SESSION['login']=$_POST['login'];


		header('location: maliste.php');

	}else{

		$error= 'Vous devez vous inscrire';
	}


}




