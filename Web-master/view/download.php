<?php
// On prolonge la session
/*session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['emailConnexion'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: index.php?action=1');
  exit();
}*/
?>
<!doctype html>
<html>
<head>
<title>Télécharger DICE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="view/images/favicon.png"/>
	
	<link rel="stylesheet" type="text/css" href="view/css/dice.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<div id="navbar" class="row">
			<div class="col-1">
				<img src="view/images/logo_dice.png" alt="DICE"/>
			</div>
			<div class="col-10">
				<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link " href="index.php?action=1002">Accueil</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="index.php?action=1003">Tutoriel</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="index.php?action=1004">Ressources</a>
			 	</li>
			  	<li class="nav-item">
					<a class="nav-link active" href="index.php?action=1005">Téléchargement</a>
			  	</li>
			</ul>
			</div>
			<div class="col-1">
				<a href="index.php?action=2001">Deconnexion</a>
			</div>
		</div>
		<div id="configuration">
			<div class="row justify-content-around">
				<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
					<h1>Configuration recommandé</h1>
					<p>• Système d'exploitation : W10, Débian, jaguard</p>
					<p>• Processeur : Intel Core i9 ou AMD Ryzen 5</p>
					<p>• Carte graphique : Intel Core i9 ou AMD Ryzen 5</p>
					<p>• Mémoire : 4To</p>
					<p>• RAM : 32 Go en DDR4</p>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
					<h1>Configuration minimale</h1>
					<p>• système d'exploitation : W95, vieux linux, vieux MAC</p>
					<p>• Processeur : Intel Pentium</p>
					<p>• Carte Graphique : Intel Core i9 ou AMD Ryzen 5</p>
					<p>• Mémoire : Intel Core i9 ou AMD Ryzen 5</p>
					<p>• RAM : Intel Core i9 ou AMD Ryzen 5</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
					<p>Et sinon, n'importe quel pc fera l'affaire. Pensez juste à vos micros et votre bonne humeur ! ;)</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
					<h2>Compatible sur : </h2>
					<img src="view/images/windows.png" alt="Windows"/><img src="view/images/apple.png" alt="apple"/><img src="view/images/linux.png" alt="linux"/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
					<a href="#" class="btn btn-primary btn-raised btn-lg">Télécharger Dice</a>
				</div>
			</div>
		</div>
		<div id="footer" class="row justify-content-around">
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Dice</h3>
				<p>Dice est un logiciel développé par des amateurs de jeu de rôle, pour les amateurs de jeu de rôle. Il permet de jouer à distance, sans avoir à être dans la même pièce.</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
				<h3>Nous retrouver</h3>
				<a href="#" target="_blank"><img src="view/images/facebook.png" alt="facebook"/></a><a href="#" target="_blank"><img src="view/images/twitter.png" alt="twitter"/></a><a href="#" target="_blank"><img src="view/images/instagram.png" alt="instagram"/></a>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
				<h3>Liens utiles</h3>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<ul>
							<li><a href="index.php?action=1005">Télécharger le logiciel</a></li>
							<li><a href="index.php?action=1003">Tutoriels</a></li>
							<li><a href="index.php?action=1004">Ressources</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
						<ul>
							<li><a href="index.php?action=1007">Qui sommes-nous ?</a></li>
							<li><a href="index.php?action=1006">Mentions légales</a></li>
							<li><a href="index.php?action=1008">Plan du site</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>
