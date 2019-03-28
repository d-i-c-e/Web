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
function suiteTestCoAdmin()
{
    // Connexion


    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);
// recup les entrees
    $identifiant = $_POST['userAdmin'];
    $mdp = $_POST['mdpAdmin'];

// requete de verif
    $resultats = $bdd->prepare("select * from admin where identifiant = '" . $identifiant . "' and mdp ='" . $mdp . "'");

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
function recupUser()
{
    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);

    $pseudo = $_POST['pseudo'];
    $email = $_POST['emailInscription'];
    $mdp = password_hash($_POST['mdpInscription'], PASSWORD_DEFAULT);

    $valeurs = ['pseudo'=>$pseudo, 'email'=>$email, 'mdp' =>$mdp];

    $requete = 'SELECT * FROM user where pseudo = '.$_POST['pseudoUser'];
    
    $valeurs = [$pseudo=>'pseudo', 'email'=>$email, 'mdp' =>$mdp];

    $requete_preparee = $bdd->prepare($requete);
    
    $requete_preparee->execute($valeurs);


}
function AjoutUser()
{
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


    $message='Utilisateur bien ajouté';
 
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

    header('location:indexAdmin.php?action=11');
    

}





?>
