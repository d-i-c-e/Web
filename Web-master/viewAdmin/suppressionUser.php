<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['userAdmin']) && isset($_SESSION['mdpAdmin'])) {
    $login = $_SESSION['userAdmin'];
    $mdp = $_SESSION['mdpAdmin'];
}
?>
<!doctype html>
<html>
<head>
<title>Admin : Utilisateur</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="viewAdmin/images/favicon.png"/>
	
	<link rel="stylesheet" type="text/css" href="viewAdmin/css/dice.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body> 
	<div class="container-fluid">
		<div id="navbar" class="row">
			<div class="col-1">
				<img src="viewAdmin/images/favicon.png" alt="DICE"/>
			</div>
			<div class="col-10">
				<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" href="indexAdmin.php?action=3002">Ajout</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="indexAdmin.php?action=3003">Modification</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link active" href="indexAdmin.php?action=3004">Suppresion</a>
				 </li>
				 <li class="nav-item">
				<?php
    			if (isset($authOK)) {
        			echo "<p>Vous avez été reconnu(e) en tant que " . escape($login) . "</p>";
    			}
    			else { ?>
        			<p>Vous n'avez pas été reconnu(e)</p>
        			<p><a href="indexAdmin.php">Nouvel essai</p>
    			<?php } ?>
				</li>
			</ul>
			</div>
			<div class="col-1">
				<a href="indexAdmin.php">Deconnexion</a>
			</div>
		</div>
		<div id="main" class="row justify-content-around">
			<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
				<h1>Suppresion d'un utilisateur</h1>
				<form method="post" action="indexAdmin.php?action=3007">
					<div class="form-group">
						<select name="pseudoUser" onchange="remplir(this.value);">
						<?php
						 $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
						 $user = 'root';
						 $mdp = '';
					 
						 $bdd = new PDO ($source, $user, $mdp);
						
					 
					 // requete de verif
						 $resultats = $bdd->prepare("select pseudo, email, mdp from user");
						 $resultats->execute();
					 	 echo( '<option value="0" selected="selected">Selectionner un utilisateur</option>');
						 while ($st = $resultats->fetch())
						 {
							 $pseudo = $st['pseudo'];
							 $email = $st['email'];
							 $mdp = $st['mdp']
						?>
						<?php
						
						 echo( '<option value="'.$pseudo.'/'.$email.'/'.$mdp.'">' .$pseudo. '</option>');
						 }
						 ?>
						</select>
					</div>
					<div class="form-group">
						<label for="pseudo" class="bmd-label-floating">Pseudo</label>
						<input type="text" class="form-control" name="pseudoModif" id="pseudo" value="" required="required">
						
					</div>
					<div class="form-group">
						<label for="emailInscription" class="bmd-label-floating">Adresse email</label>
						<input type="email" class="form-control" name="emailModif" id="emailInscription" value="" required="required">
						
					</div>
					<div class="form-group">
						<label for="mdpInscription" class="bmd-label-floating">Mot de passe</label>
						<input type="password" class="form-control" name="mdpModif" id="mdpInscription" value="" required="required">
						
					</div>
					<script type="text/javascript">
					function remplir(monuser){
						var tableau_valeur = monuser.split('/');
						document.getElementById("pseudo").value = tableau_valeur[0];
						document.getElementById("emailInscription").value = tableau_valeur[1];
						document.getElementById("mdpInscription").value = tableau_valeur[2];
					}
					</script>
					<button type="submit" class="btn btn-primary btn-raised">Supprimer</button>
					
				</form>
			</div>
		</div>
		<div id="footer" class="row justify-content-around">
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Dice</h3>
				<p>Dice est un logiciel développé par des amateurs de jeu de rôle, pour les amateurs de jeu de rôle. Il permet de jouer à distance, sans avoir à être dans la même pièce.</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Nous retrouver</h3>
				<a href="#" target="_blank"><img src="view/images/facebook.png" alt="facebook"/></a><a href="#" target="_blank"><img src="view/images/twitter.png" alt="twitter"/></a><a href="#" target="_blank"><img src="view/images/instagram.png" alt="instagram"/></a>
			</div>

		</div>
	</div>
</body>
</html>
