<?php
require "model/model.php";

function accueil()
{
    require "view/connexion.php";
}
function testCoError()
{
    require "";
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
            session_destroy();
            include('view/connexion.php');
            break;
        default:
            # code...
            break;
    }
}

?>