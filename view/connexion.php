<!doctype html>
<html>
<head>
	<title>Connexion à DICE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="view/images/favicon.png"/>
	
	<link rel="stylesheet" type="text/css" href="view/css/dice.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	
	
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<a href="index.php?action=1"><img src="view/images/sorciere_v2.png" alt="" class="imgheader"/></a>
			</div>
		</div>
		<div id="main" class="row justify-content-around">
			<div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
				<h1>Pas encore membre ? Inscris-toi</h1>
				<form method="post" action="view/inscription.php">
					<div class="form-group">
						<label for="pseudo" class="bmd-label-floating">Pseudo</label>
						<input type="text" class="form-control" name="pseudo" id="pseudo" required="required">
						
					</div>
					<div class="form-group">
						<label for="emailInscription" class="bmd-label-floating">Adresse email</label>
						<input type="email" class="form-control" name="emailInscription" id="emailInscription" required="required">
						
					</div>
					<div class="form-group">
						<label for="emailVerification" class="bmd-label-floating">Confirmation d'adresse email</label>
						<input type="email" class="form-control" name="emailVerification" id="emailVerification" required="required">
						
					</div>
					<div class="form-group">
						<label for="mdpInscription" class="bmd-label-floating">Mot de passe</label>
						<input type="password" class="form-control" name="mdpInscription" id="mdpInscription" required="required">
					</div>
					<div class="form-group">
						<label for="mdpVerification" class="bmd-label-floating">Confirmation du mot de passe</label>
						<input type="password" class="form-control" name="mdpVerification" id="mdpVerification" required="required">
					</div>
					<button type="submit" class="btn btn-primary btn-raised">Inscription</button>
				</form>
			</div>
			
			<div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
				<h1>Déjà membre ? Connecte-toi</h1>
				<form method="post" action="index.php">
					<div class="form-group">
						<label for="emailconnexion" class="bmd-label-floating">Adresse email</label>
						<input type="email" class="form-control" name="emailConnexion" id="emailconnexion" required="required">
			
					</div>
					<div class="form-group">
						<label for="mdpConnexion" class="bmd-label-floating">Mot de passe</label>
						<input type="password" class="form-control" name="mdpConnexion" id="mdpConnexion" required="required">
					</div>
					<button type="submit" class="btn btn-primary btn-raised" value="Connexion">Connexion</button>
				</form>
				<a href="download.php" class="btn btn-primary" btn-raised>Bouton de triche pour accéder au site une fois connecté</a>
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
