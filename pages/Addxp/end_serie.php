<?php

session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {
    header('Location: ../login/logout.php');
    exit();
}

$id_user = $_SESSION["id_user"];
$xp = $_SESSION["xp_added"];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../index.css">

    <title>Fin de la serie de questions</title>
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <main>

        <div class="question">

            <h2>Résultats</h2>
            <br>
            <ul>
                <li>Question 1 : <?= $_SESSION["serie_stats"][0] ?></li>
                <li>Question 2 : <?= $_SESSION["serie_stats"][1] ?></li>
                <li>Question 3 : <?= $_SESSION["serie_stats"][2] ?></li>
                <li>Question 4 : <?= $_SESSION["serie_stats"][3] ?></li>
                <li>Question 5 : <?= $_SESSION["serie_stats"][4] ?></li>
            </ul>
            <br>
            <p>Tu as gagné <?= $_SESSION["xp_added"] ?> xp</p>
            <a href="../CultureG/next_quest.php">
                <input type="submit" class="btn" value="Culture-G">
            </a>

            <a href="../Filiere/next_quest.php">
                <input type="submit" class="btn" value="Filiere">
            </a>

            <a href="../Accueil/accueil.php">
                <input type="submit" class="btn" value="Home">
            </a>
        </div>


    </main>

    <script src="../../JS/question.js"></script>
    </script>
</body>

</html>