<?php

session_start();
$id_user = $_SESSION["id_user"];
$xp = $_SESSION["xp_to_add"];

$dbh = new PDO('mysql:host=localhost;dbname=wyzz', "root", "");
$requete = "UPDATE user SET xp = xp + '$xp' WHERE id_user = '$id_user'";
$result = $dbh->exec($requete);

echo ($_SESSION["xp_to_add"] . ", ");
$serie_xp = "";

foreach ($_SESSION["serie_xp"] as $elm) {
    $serie_xp = $serie_xp . ", " . $elm;
}

$_SESSION["quest_stage"] = 1;
$_SESSION["xp_added"] = $_SESSION["xp_to_add"];
$_SESSION["xp_to_add"] = 0;

echo ($serie_xp. " , ".$_SESSION["xp_added"]);

header("Location: ../MiniJeux/minijeux.php")
?>