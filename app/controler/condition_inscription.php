<?php



if (isset($_POST['bouton_connexion'])) {

	$login=htmlspecialchars($_POST['login']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	$password_confirm=htmlspecialchars($_POST['password_confirm']);

	if (($login ==true) AND ($email ==true) AND($password ==true) AND($password_confirm ==true) ){

		if ($password == $password_confirm) {
			
			$password=password_hash($password,PASSWORD_BCRYPT);


			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

				$succes ='Votre compte a bien été crée !';


				// Si toutes les conditions ont été remplies, alors je peux me connecter à la BDD	
				require '../model/connexion_bdd.php';
				require '../model/requete_sql.php';

				// Si la connexion avec la BDD ok, on redirige vers la page de la todolist maliste.php en démarrant la session:
				
				session_start();
				$_SESSION['login']=$_POST['login'];
				


				header('location: maliste.php');



			}else{

				$error= 'Votre email n\'est pas valide';
			}
		}else {

			$error = 'Attention, vos mots de passe ne correspondent pas!';
		}



	}else {

		$error= "Vous devez remplir tous les champs";
	} // remplir tous les champs
}	





