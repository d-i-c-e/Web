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
	<title>Bienvenue sur DICE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="view/images/favicon.png"/>
	
	<link rel="stylesheet" type="text/css" href="view/css/dice.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<div id="navbar" class="row align-items-center">
			<div class="col-2">
				<img src="view/images/logo_dice.png" alt="DICE" style="width: 70%"/>
			</div>
			<div class="col-9">
				<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active"  href="index.php?action=1002">Accueil</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="index.php?action=1003">Tutoriels</a>
			  	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="index.php?action=1004">Ressources</a>
			 	</li>
			  	<li class="nav-item">
					<a class="nav-link" href="index.php?action=1005">Téléchargement</a>
			  	</li>
			</ul>
			</div>
			<div class="col-1">
				<a href="index.php?action=2001">Deconnexion</a>
			</div>
		</div>
		<div id="caroussel" class="row">
			<div class="bd-example">
			  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="view/images/deadland.png" class="d-block w-100" alt="DEADLAND">
					<div class="carousel-caption d-none d-md-block">
					  <h5>Deadland arrive</h5>
					  <p>Horreur et western, un mélange étrange et détonant. Retrouve le nouveau JDR.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="view/images/magnaveritas.png" class="d-block w-100" alt="MAGNA VERITAS">
					<div class="carousel-caption d-none d-md-block">
					  <h5>Magna Véritas</h5>
					  <p>Le seul jeu ou les anges sont plus badass que les démons. Feuille de personnage disponible.</p>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="view/images/ageofpirate.png" class="d-block w-100" alt="PIRATES">
					<div class="carousel-caption d-none d-md-block">
					  <h5>Pirates</h5>
					  <p>Nouvelles règles pour le JDR où tout est permis !</p>
					</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>			
		</div>
		<div id="main" class="row justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 align-self-center">
				<p>En ces terres désolées, arides, hostiles, il était quatre rollistes. Avec la volonté de réunir toutes les factions en une. Ils voulaient voir les rollistes du monde entier unis sous la même banière : celle de la passion, du plaisir, et de l’unité. <br>C’est ainsi qu’ils ont eu l’idée de créer un outil simple et efficace pour permettre à tous de partager un moment convivial sans se prendre la tête. </p>
				<p><strong>Dice c'est quoi ?</strong></p>
				<p>C’est un logiciel simple et inovent, facile d’utilisation, sur lequel tous les joueurs pourront éditer des feuilles de personnages et des cartes de jeu pour ainsi jouer ensemble encombre. <br>Vous trouverez en vous inscrivant toutes les ressources nécessaires au bon déroulement d’une partie de jeu de rôle. Ainsi que des tutoriels pour vous guider en cas de besoin.</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
				<img src="view/images/sorciere_complete.png" alt="" style="width: 100%"/>
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
			<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
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
	
	
	
	
	<script>
		$('.carousel').carousel
		({
  			interval: 2000
		});
		$('carousel').carousel('cycle');
	</script>
</body>
</html>