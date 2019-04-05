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
function modifUser()
{
    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);
    $pseudoMod = $_POST['pseudoModif'];
    $emailMod = $_POST['emailModif'];
    $mdpMod = $_POST['mdpModif'];

    $valeurs1 = ['pseudo'=>$pseudoMod, 'email'=>$emailMod, 'mdp' =>$mdpMod];

    $requetes1 = "UPDATE user SET `pseudo` = :pseudo, `email` = :email, `mdp` = :mdp WHERE `pseudo` = :pseudo";
                     
    
    $requete_prepare = $bdd->prepare($requetes1);
    
    $requete_prepare->execute($valeurs1);

    
    $message='Utilisateur bien modifié';
 
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

    header('location:indexAdmin.php?action=3003');

}
function suppUser()
{
    $source = 'mysql:host=localhost;dbname=dice;charset=utf8';
    $user = 'root';
    $mdp = '';

    $bdd = new PDO ($source, $user, $mdp);
    $pseudoMod = $_POST['pseudoModif'];

    $valeurs1 = ['pseudo'=>$pseudoMod];

    $requetes1 = "DELETE FROM `user` WHERE `pseudo` = :pseudo";
                     
    
    $requete_prepare = $bdd->prepare($requetes1);
    
    $requete_prepare->execute($valeurs1);

    
    $message='Utilisateur bien modifié';
 
    echo '<script type="text/javascript">window.alert("'.$message.'");</script>';

    header('location:indexAdmin.php?action=3004');
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

    header('location:indexAdmin.php?action=3002');
    

}





?>
