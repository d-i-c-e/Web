<?php


require "controller/controller.php";

if (isset($_POST['emailConnexion']) && isset($_POST['mdpConnexion'])) {
    //vue co error
    testCo();
    session_start();
} elseif (isset($_GET['action'])) {
    chargementPage();
} else {
    accueil();
}


?>