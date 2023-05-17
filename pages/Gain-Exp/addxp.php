<?php
session_start();


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

if (isset($_GET["end_game"])) {
    $end_game = htmlspecialchars($_GET["end_game"]);
} else {
    header('Location: ../../accueil/accueil.php');
}


if (isset($_SESSION['xp']) && isset($_SESSION['id_user']) && $end_game == "win") {

    $xp = $_SESSION['xp'];
    $xp = $xp + 10;
    $id = $_SESSION['id_user'];
    $req = $dbh->prepare('UPDATE wyzz_user SET xp = :xp WHERE id_user = :id');
    $req->execute(
        array(
            'xp' => $xp,
            'id' => $id
        )
    );
    $_SESSION['xp'] = $xp;

    header('Location: ../Recap/recap.php?end_game=win');
} else {
    header('Location: ../Recap/recap.php?end_game=lose');
}




?>