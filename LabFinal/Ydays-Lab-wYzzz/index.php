<?php
    
try {
    $user = "root";
    $pass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=ywzz', $user, $pass);

    $requete = 'SELECT * FROM user';
    $result = $dbh->query($requete);
    foreach($dbh->query($requete) as $row) {
        afficherLigne($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

function afficherLigne($row) {
    echo 'id_user: ' . $row['id_user'];
    echo '<br />';
    echo 'email: ' . $row['email'];
    echo '<br />';
    echo 'pass_user: ' . $row['pass_user'];
    echo '<br />';
    echo '<br />';
}
?>