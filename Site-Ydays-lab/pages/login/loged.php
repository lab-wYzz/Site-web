<?php
session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {   
    header('Location: logout.php');
    exit();
}

$info = $_SESSION['pseudo']. $_SESSION['filiere'];


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="main.css" rel="stylesheet"> -->
    <title>test PHP</title>
</head>

<body>
    <header>
        <div class="nav">
            <p>Bienvenue</p>
        </div>
    </header>
    <main>
        <!-- bouton de déconnexion -->
        <a href="logout.php"><button>Logout</button></a>
        <p>
            <?= $info ?>
        </p>
    </main>

</body>

</html>

