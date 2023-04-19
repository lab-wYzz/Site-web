<?php
session_start();


$bdd = new PDO('mysql:host=localhost;dbname=wyzz', "root","");
    

if (isset($_SESSION['xp']) && isset($_SESSION['id_user'])) {

    $xp = $_SESSION['xp'];
    $xp = $xp + 10;
    $id = $_SESSION['id_user'];
    $req = $bdd->prepare('UPDATE user SET xp = :xp WHERE id_user = :id');
    $req->execute(array(
        'xp' => $xp,
        'id' => $id
    ));
    $_SESSION['xp'] = $xp;
}

header('Location: ../../accueil/accueil.php'); 


?>