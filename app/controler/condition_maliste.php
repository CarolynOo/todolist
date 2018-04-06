<?php



if (isset($_POST['bouton_tache'])) {

	$titre=$_POST['titre'];
	$description=$_POST['description'];

	

	if (($titre ==true) AND($description ==true) ){


		require '../model/connexion_bdd.php';

		require '../model/requete_maliste.php';


	 echo '<h1> BRAVO LE VEAU ! TACHES BIEN ENREGISTRées!</h1>';

	}else{

		$error= 'Vous devez remplir le formulaire';
	}


}




