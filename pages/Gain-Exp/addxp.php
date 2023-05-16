<?php
session_start();


$bdd = new PDO('mysql:host=localhost;dbname=wyzz', "root", "");

if (isset($_GET["end_game"])) {
    $end_game = htmlspecialchars($_GET["end_game"]);
} else {
    header('Location: ../../accueil/accueil.php');
}


if (isset($_SESSION['xp']) && isset($_SESSION['id_user']) && $end_game == "win") {

    $xp = $_SESSION['xp'];
    $xp = $xp + 10;
    $id = $_SESSION['id_user'];
    $req = $bdd->prepare('UPDATE user SET xp = :xp WHERE id_user = :id');
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