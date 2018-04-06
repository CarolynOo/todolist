<?php session_start();?>
<?php require 'header.php';?>  
<?php require '../controler/condition_maliste.php';?>

<h1> <?php  echo "Bienvenue". " ". $_SESSION['login']."!" ; ?> </h1>


  
	<form action=" " method="POST"> 
    
    <div>
      <label for="nom"> Titre</label>
      <input type="text" name="titre">
    </div>
    
    <div>
      <label for="nom"> Description</label>
      <input type="text" name="description">
    </div>
    
    
    
     <!--<label for="nom"> Echeance</label><input type="date" name="date"> -->
  

    
    		
    <input type="submit" name="bouton_tache" value="Confirmer">
	</form>

