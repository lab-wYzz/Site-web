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
    <header>
        <?php require '../../compenents/topBar.php' ?>
    </header>

    <main>
        <?php require '../../compenents/progression.php' ?>

        <div class="quiz">
            <h3 class="question">Combien de filiere existe-t-il a Ynov ?</h3>
            <div class="reponse">
                <button class="btn-reponse">5</button>
                <button class="btn-reponse">3</button>
                <button class="btn-reponse">9</button>
                <button class="btn-reponse">7</button>
            </div>
            <button class="btn-valider">Valider</button>
            <p class="p-valider">Etes-vous sur de votre reponse !!</p>
        </div>

        <?php require '../../compenents/background.php' ?>
    </main>


</body>

</html>