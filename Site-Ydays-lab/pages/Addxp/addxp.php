<?php

session_start();
$id_user = $_SESSION["id_user"];
$xp = $_SESSION["xp_to_add"];
$_SESSION["xp_added"] = $xp;

$dbh = new PDO('mysql:host=localhost;dbname=wyzz', "root", "");
$requete = "UPDATE user SET xp = xp + '$xp' WHERE id_user = '$id_user'";
$result = $dbh->exec($requete);

$_SESSION["serie_stats"] = array();
foreach ($_SESSION["serie_xp"] as $elm) {
    array_push($_SESSION["serie_stats"],$elm);
}

$_SESSION["serie_xp"] = array();

$_SESSION["quest_stage"] = 0;

$_SESSION["xp_to_add"] = 0;

header('Location: ./end_serie.php');

?>

