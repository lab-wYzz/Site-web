<?php

session_start();
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
    <link rel="stylesheet" href="../../css/question.css">
    <link rel="stylesheet" href="../../index.css">
    <title>Fin de la serie de questions</title>
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <main>

        <p>Résultats réponses : </p>
        <br>
        <ol>
            <li>Quest 1 : <?= $_SESSION["serie_stats"][0] ?></li>
            <li>Quest 2 : <?= $_SESSION["serie_stats"][1] ?></li>
            <li>Quest 3 : <?= $_SESSION["serie_stats"][2] ?></li>
            <li>Quest 4 : <?= $_SESSION["serie_stats"][3] ?></li>
            <li>Quest 5 : <?= $_SESSION["serie_stats"][4] ?></li>
        </ol>
        <br>
        <p>Tu as gagné <?= $_SESSION["xp_added"] ?> xp</p>
        <a href="../question/next_quest.php">
            <button> new serie_xp</button>
        </a>


    </main>

    <script src="../../JS/question.js"></script>
    <script>


    </script>
</body>

</html>