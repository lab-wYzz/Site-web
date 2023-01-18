<?php

    $email = $_GET["email"];
    $pass_user = $_GET["pass_user"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ywzz";

try {
    $conn = new PDO("mysql:host=localhost;dbname=ywzz", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM user WHERE email=? AND pass_user=?");
    $stmt->execute([$email, $pass_user]); 
    $users = $stmt->fetch();
    if ($users) {
        $message='Ce compte existe déjà';
        echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        include("../bdd_test/assets/html/connrefuser.php");
    } else {
        $sql = "INSERT INTO user (email, pass_user)
        VALUES ('$email', '$pass_user')";
    
        $conn->exec($sql);
        include("./assets/html/connvalider.php");
    }
}
catch(PDOException $e)
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$conn = null;

?>