<?php
require "model/model.php";

function accueil()
{
    require "view/connexion.php";
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
    $resultat = suiteTestCoAdmin();
    if (isset($resultat [0])) {
        // Ouverture session
        $_SESSION ['userAdmin'] = $resultat [1];

        require 'viewAdmin/ajoutUser.php';
    } else {
    }
}
function testCo()
{
    $resultat = suiteTestCo();
    if (isset($resultat [0])) {
        // Ouverture session
        $_SESSION ['emailConnexion'] = $resultat [1];

        require 'view/download.php';
    } else {
    }
}
function testInscription()
{
    inscription();
    
        require 'index.php';

}

function chargementPage()
{

    switch ($_GET['action']) {
        case '1':
            include('view/accueil.php');
            break;

        case '2':
            include('view/aPropos.php');
            break;

        case '3':
            include('view/download.php');
            break;

        case '4':
            include('');
            break;

        case '5':
            include('');
            break;

        case '6':
            $_SESSION = array();
            session_destroy();
            include('view/connexion.php');
            break;
        case '7':
            $_SESSION = array();
            session_destroy();
            include('viewAdmin/admin.php');
            break;
        case '8':

            break;
        case '9':

            break;
        case '10':
            include('viewAdmin/admin.php');
            break;
        case '11':
            include('viewAdmin/ajoutUser.php');
            break;
        case '12':
            include('viewAdmin/modificationUser.php');
            break;
        case '15':
            ajoutUser();
            break;
        default:
            # code...
            break;
    }
}

?>