
<?php

$filiere = "cultureG";
$test = "";
$quest;
$reponse = array();
$R1;

// accède à la base de données SQL
$dbh = new PDO('mysql:host=localhost;dbname=Ywzz', "root", "");
$requete = "SELECT * FROM question WHERE filiere = '$filiere' ORDER BY rand() LIMIT 1";
$result = $dbh->query($requete);
foreach ($result as $row) {
    $reponse = array();
    $quest = $row["quest"];
    array_push($reponse,$row["R1"],$row["R2"],$row["R3"],$row["R4"]);
    $R1 = $reponse[0];
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
    <link rel="stylesheet" href="../../css/question.css">
    <title>Question {var de la progression} - Arriveras-tu a repondre ?</title>
</head>

<body>
    

    <main>

        <div class="quiz">
            <h3 class="question"><?= $quest, $R1 ?></h3>
            <div class="reponse">
                <button class="btn-reponse"><?= $reponse[0] ?></button>
                <button class="btn-reponse"><?= $reponse[1] ?></button>
                <button class="btn-reponse"><?= $reponse[2] ?></button>
                <button class="btn-reponse"><?= $reponse[3] ?></button>
            </div>
            <p><?= $test ?></p>
            <button class="btn-valider">Valider</button>
            <p class="p-valider">Etes-vous sur de votre reponse !!</p>
        </div>

    </main>


</body>

</html>