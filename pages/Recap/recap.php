<?php
session_start();

if (isset($_GET["end_game"])) {
    $end_game = htmlspecialchars($_GET["end_game"]);
} else {
    header('Location: ../../accueil/accueil.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Recap de votre partie</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>

    <div class="question">
        <?php
    if ($end_game == "win") {
    ?>
        <h2>Vous gagnez votre partie Bien joué</h2>
        <h3>Vous avez gagne +10px</h3>

        <?php
    } else {
    ?>
        <h2>Vous perdez votre partie Bonne chance pour la prochaine</h2>
        <h3>Vous avez gagne +0px</h3>
        <?php
    }
    ?>


        <a href="../MiniJeux/minijeu.php">
            <input type="submit" class="btn" value="MiniJeux">
        </a>

        <a href="../Accueil/accueil.php">
            <input type="submit" class="btn" value="Home">
        </a>
    </div>

</body>

</html>