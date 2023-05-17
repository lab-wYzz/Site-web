<?php

session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {
    header('Location: ../login/logout.php');
    exit();
}

if (!isset($_SESSION["quest_stage"])) {
    header('Location: ./next_quest.php');
}

$filiere = "cultureG";
$quest;
$reponse = array();
$R1;

if ($_SESSION["quest_stage"] == 1) {
    $_SESSION["serie_xp"] = array();
    $_SESSION["xp_to_add"] = 0;
}

$serie_xp = "";

foreach ($_SESSION["serie_xp"] as $elm) {
    $serie_xp = $serie_xp . ", " . $elm;
}

$quest_stage = $_SESSION["quest_stage"];

// accède à la base de données SQL
$dbh = new PDO('mysql:host=localhost;dbname=wyzz', "root", "");
$requete = "SELECT * FROM question WHERE filiere = '$filiere' ORDER BY rand() LIMIT 1";
$result = $dbh->query($requete);
foreach ($result as $row) {
    $quest = $row["quest"];
    array_push($reponse, $row["R1"], $row["R2"], $row["R3"], $row["R4"]);
    $R1 = $reponse[0];
    $_SESSION["Good_rep"] = $R1;
    shuffle($reponse);
}

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

    <title>Question
        <?= $_SESSION["quest_stage"] ?> - Arriveras-tu a repondre ?
    </title>
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Question CultureG</h1>
        <p>Vous voici dans la catégorie Culture G. Vous trouverez ci-dessous les questions proposés chaque jour.
            Cela marche de manière a pouvoir répondre à des questions de
            culture général pour pouvoir gagner d’avantage d’xp.</p>
        <input id="modal-btn" type="button" value="Jouer" class="btn">
    </div>

    <main>


        <div class="question">
            <h2><?= $filiere ?></h2>
            <p><?= $_SESSION["quest_stage"] ?>/5</p>

            <h3>
                <?= $quest ?>
            </h3>
            <form action="next_quest.php" id="rep" class="reponse">
                <input type="submit" id="REP1" class="btn" name="rep" value="<?= $reponse[0] ?>">
                <input type="submit" id="REP2" class="btn" name="rep" value="<?= $reponse[1] ?>">
                <input type="submit" id="REP3" class="btn" name="rep" value="<?= $reponse[2] ?>">
                <input type="submit" id="REP4" class="btn" name="rep" value="<?= $reponse[3] ?>">
            </form>
        </div>


    </main>

    <script src="../../JS/popup.js"></script>

    <script src="../../JS/question.js"></script>
    <script>
        console.log("<?= $quest, $R1 ?>")
    </script>
</body>

</html>