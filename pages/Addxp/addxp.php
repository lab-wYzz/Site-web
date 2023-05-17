<?php

session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {   
    header('Location: ../login/logout.php');
    exit();
}

$id_user = $_SESSION["id_user"];
$xp = $_SESSION["xp_to_add"];
$_SESSION["xp_added"] = $xp;

require("../../loadenv.php");
$host = $_ENV["DB_HOST"];
$port = $_ENV["DB_PORT"];
$name = $_ENV["DB_DATABASE"];
$user = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];

$dsn = "mysql:host={$host};port={$port};dbname={$name};charset=utf8";
$dbh = new PDO($dsn, $user, $password, [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_STRINGIFY_FETCHES => false
]);

$requete = "UPDATE wyzz_user SET xp = xp + '$xp' WHERE id_user = '$id_user'";
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

