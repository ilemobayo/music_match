<?php
require("assets/inc/init.inc.php");





// La ligne suivant commnce les affichages dans la page
require("assets/inc/header.inc.php");
require("assets/inc/nav.inc.php");
//echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>
<div class="wrapper">


 
    <div class="container">

      <div class="starter-template">
        <h1><span class="glyphicon glyphicon-user" style="color: red;"></span>Connexion</h1>
        <?php //echo $message; // messages destines a l'utilisateur ?>
		<?= $message; // cette balise php inclue un echo et est equivalent a la ligne au dessus ?>
      </div>
	  
	
		<div class="row">
		  <div class="col-sm-4 col-sm-offset-4">
			<form method="post" action="" class="well">
				<label for="pseudo">Pseudo</label>
				<input type="text" name="pseudo" id="pseudo" class="form-control" value="" />
				<label for="mdp">Mot de passe</label>
				<input type="text" name="mdp" id="mdp" class="form-control" value="" />
				<button type="submit" name="inscription" id="inscription" class="form-control btn btn-success" style="margin-top:20px;"><span style="color:red;"></span> Connexion</button>
			</form>	
		  </div>
		</div>
		
    </div>
</div>    	
<?php
require("assets/inc/footer.inc.php");