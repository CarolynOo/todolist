<?php 

require '../controler/condition_inscription.php';

?>



<body>
    
    <?php require 'header.php'; ?>
        
    <h1>Inscription Membre</h1>
 
    <?php if(isset($error)){ 
      echo '<div style="color:red;">'. $error. '</div>'; }  ?> 
    <?php if(isset($succes)){ 
      echo '<div style="color:green;">'. $succes. '</div>';}  ?>



	
	<form action=" " method="POST"> 
    
    <div>
      <label for="nom"> Login</label>
      <input type="text" name="login">
    </div>
    
    <div>
      <label for="nom"> Email</label>
      <input type="email" name="email">
    </div>
    
    
    <div>
      <label for="nom"> Mot de passe</label>
      <input type="password" name="password">
    </div>
    
    <div>
      <label for="nom"> Vérification mot de passe</label>
      <input type="password" name="password_confirm">
    </div>
    
    
    		
    <input type="submit" name="bouton_connexion" value="Connexion">
	</form>


   <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <script type="text/javascript" scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>