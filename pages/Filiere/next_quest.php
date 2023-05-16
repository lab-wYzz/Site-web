<?php

session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {
    header('Location: ../login/logout.php');
    exit();
}

if (!isset($_SESSION["quest_stage"])) {
    $_SESSION["serie_xp"] = array();
    $_SESSION["quest_stage"] = 1;
    $_SESSION["xp_to_add"] = 0;
    header('Location: ./question.php');
} else if ($_SESSION["quest_stage"] >= 5) {

    if (isset($_GET["rep"])) {
        $rep = $_GET["rep"];
    }

    if ($_SESSION["Good_rep"] == $rep) {
        array_push($_SESSION["serie_xp"], "good");
        $_SESSION["xp_to_add"] += 10;
    } else {
        array_push($_SESSION["serie_xp"], "bad");
    }

    header('Location: ../Addxp/addxp.php');

} else {

    if (isset($_GET["rep"])) {
        $rep = $_GET["rep"];
    }

    if ($_SESSION["Good_rep"] == $rep) {
        array_push($_SESSION["serie_xp"], "good");
        $_SESSION["xp_to_add"] += 10;
    } else {
        array_push($_SESSION["serie_xp"], "bad");
    }

    $_SESSION["quest_stage"] += 1;

    header('Location: ./question.php');
}




?>