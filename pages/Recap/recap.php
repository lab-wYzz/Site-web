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
    <title>Document</title>
    <link rel="stylesheet" href="../../index.css">

</head>

<body>

    <?php
    if ($end_game == "win") {
        ?>
        <h3>You win your Game Well played</h3>
        <?php
    } else {
        ?>
        <h3>You lose your Game Good luck for the next one</h3>
        <?php
    }
    ?>
    <a href="../Accueil/accueil.php">Home</a>
    <a href="../MiniJeux/minijeu.php">MiniJeux</a>

</body>

</html>