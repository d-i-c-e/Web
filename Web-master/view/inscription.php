<?php
$source = 'mysql:host=localhost;dbname=dice;charset=utf8';
$user = 'root';
$mdp = '';

$bdd = new PDO ($source, $user, $mdp);

$pseudo = $_POST['pseudo'];
$email = $_POST['emailInscription'];
$mdp = password_hash($_POST['mdpInscription'], PASSWORD_DEFAULT);

$valeurs = ['pseudo'=>$pseudo, 'email'=>$email, 'mdp' =>$mdp];

$requete = 'INSERT INTO user (pseudo, email, mdp) 
                 VALUES (:pseudo, :email, :mdp)';

$requete_preparee = $bdd->prepare($requete);

$requete_preparee->execute($valeurs);

?>
<!doctype html>
<html>
<head>
	<title>Connexion à DICE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	
	<link rel="stylesheet" type="text/css" href="css/dice.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	
	
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<a href="index.php?action=1"><img src="images/sorciere_v2.png" alt="" class="imgheader"/></a>
			</div>
        </div>
        <div id="main" class="row justify-content-around">
        <h1>Tu as bien été inscrit !</h1>
            <form method="post" action="../index.php">
                <button type="submit" class="btn btn-primary btn-raised">Retour connexion</button>
            </form>
        </div>
		<div id="footer" class="row justify-content-around">
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Dice</h3>
				<p>Dice est un logiciel développé par des amateurs de jeu de rôle, pour les amateurs de jeu de rôle. Il permet de jouer à distance, sans avoir à être dans la même pièce.</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Nous retrouver</h3>
				<a href="#" target="_blank"><img src="images/facebook.png" alt="facebook"/></a><a href="#" target="_blank"><img src="images/twitter.png" alt="twitter"/></a><a href="#" target="_blank"><img src="images/instagram.png" alt="instagram"/></a>
			</div>

		</div>
	</div>
	
	
	
</body>
</html>
