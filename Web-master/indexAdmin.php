<?php


require "controller/controller.php";

if (isset($_POST['userAdmin']) && isset($_POST['mdpAdmin'])) {
    //vue co error
    testCoAdmin();
    session_start();
} elseif (isset($_GET['action'])) {
    chargementPage();
} else {
    admin();
}


?>