<?php

    $email = $_GET["email"];
    $pass_user = $_GET["pass_user"];

try {
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=ywzz', $user, $pass);

    $stmt = $dbh->prepare("SELECT * FROM user WHERE email=? AND pass_user=?");
    $stmt->execute([$email, $pass_user]); 
    $users = $stmt->fetch();
    if ($users) {
    include("./accueil.php");
    } else {
    echo "Erreur de connexion";
    } 

    $dbh = null;
}
catch(PDOException $e)
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$conn = null;

?>