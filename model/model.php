<?php
function suiteTestCo()
{
    // Connexion


    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);
// recup les entrees
    $identifiant = $_POST['emailConnexion'];
    $mdp = $_POST['mdpConnexion'];

// requete de verif
    $resultats = $bdd->prepare("select * from user where email = '" . $identifiant . "' and mdp ='" . $mdp . "'");

    $resultats->execute();

    $st = $resultats->fetch();

    return $st;

// si bon redirige

}

function deco()
{
    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);

}

function inscription()
{
    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);

    $pseudo = $_GET['pseudo'];
    $email = $_GET['emailInscription'];
    $mdp = $_GET['mdpInscription'];

    $valeurs = ['pseudo'=>$pseudo, 'email'=>$email, 'mdp' =>$mdp];

    $requete = 'INSERT INTO user (pseudo, email, mdp) 
                     VALUES (:pseudo, :email, :mdp)';
    
    $requete_preparee = $bdd->prepare($requete);
    
    $requete_preparee->execute($valeurs);

}

function ajouterFiche()
{
    $source = 'mysql:host=localhost;dbname=notedefrais;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);

    //recuperer les variables
    $identifiant = $bdd->prepare('SELECT id from visiteur where login = (" . $identifiant ."');
    $id = $identifiant->execute();
    $id = $id->fetch();
    
    $mois = $_POST['txt_mois'];
    $forfaitEtape = $_GET['txt_ForfaitEtape'];
    $fraisKilo = $_GET['txt_FraisKM'];
    $repasRestaurant = $_GET['txt_restaut'];
    $nuitHotel = $_GET['txt_Nuit'];
    $montantValide = $_GET['txt_cout'];
    $dateModif = date("d-m-y");
    $idetat = null;

    $resultats = $bdd->prepare("INSERT INTO fichefrais (" . $id. "," . $mois . "," . $forfaitEtape . "," . $fraisKilo . "," . $repasRestaurant . "," . $nuitHotel . "," . $montantValide . "," . $dateModif ."," . $idetat . ")");

    $resultats->execute();
}

?>
