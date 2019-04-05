<?php
require "model/model.php";

function accueil()
{
    require "view/accueil.php";
}
function admin()
{
    require "viewAdmin/admin.php";
}
function testCoError()
{
    require "";
}
function testCoAdmin()
{
   /* session_start();

    $resultat = suiteTestCoAdmin();
    if (isset($resultat [0])) {
        
        // Ouverture session
        $_SESSION ['userAdmin'] = $resultat [1];

        require 'viewAdmin/ajoutUser.php';
    } else {
    }*/

    require "viewAdmin/ajoutUser.php";
}
function testCo()
{
    session_start();

    $resultat = suiteTestCo();
    if (isset($resultat [0])) {
        
        // Ouverture session
        $_SESSION ['emailConnexion'] = $resultat [1];

        require 'view/accueilConnexion.php';
    } else {
    }
}
function test()
{
    require "viewAdmin/modificationUser.php";
}

function chargementPage()
{
if (isset($_GET['action'])){
    switch ($_GET['action']) {
        //page du site
        case '1':
            include('view/connexion.php');
            break;
        case '1001':
            include('view/accueil.php');
            break;
        case '1002':
            include('view/accueilConnexion.php');
            break;
        case '1003':
            include('view/tutoriels.php');
            break;
        case '1004':
            include('view/ressources.php');
            break;
        case '1005':
            include('view/download.php');
            break;
        case '1006':
            include('view/mentions.php');
            break;    
        case '1007':
            include('view/who.php');
            break;
        case '1008':
            include('view/plan.php');
            break; 
        //connexion 
        case '2001':
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
            include('view/connexion.php');
            break;
        case '2002':
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
            include('viewAdmin/admin.php');
            break;
        //partie admin
        case '3001':
            include('viewAdmin/admin.php');
            break;
        case '3002':
            include('viewAdmin/ajoutUser.php');
            break;
        case '3003':
            include('viewAdmin/modificationUser.php');
            break;
        case '3004':
            include('viewAdmin/suppressionUser.php');
            break;
        case '3005':
            ajoutUser();
            break;
        case '3006':
            modifUser();
            break;
        case '3007':
            suppUser();
            break;
        default:
            # code...
            break;
    }
}
}

?>