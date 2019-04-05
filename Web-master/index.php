<?php


require "controller/controller.php";

if (isset($_POST['emailConnexion']) && isset($_POST['mdpConnexion'])) {
    //vue co error
    session_start();
    testCo();
} elseif (isset($_GET['action'])) {
    chargementPage();
} else {
    accueil();
}


?>