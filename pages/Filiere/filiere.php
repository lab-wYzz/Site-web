<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../index.css">

    <title>Question Filiere - Es-tu pret a jouer ?</title>
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Question Filiere</h1>
        <p>Vous voici dans la catégorie Filière. Vous trouverez ci-dessous les questions proposés chaque jour.
            Cela marche de manière a pouvoir répondre à 5 questions par jour
            en rapport avec votre filière.</p>
        <input id="modal-btn" type="button" value="Jouer" class="btn">
    </div>
    </div>

    <div class="question">
        <h3>Quelle est l'animal le plus rapide ?</h3>
        <div class="reponse">
            <input type="submit" class="btn" value="Le rat">
            <input type="submit" class="btn" value="Le Leopard">
            <input type="submit" class="btn" value="le singe">
            <input type="submit" class="btn" value="Le poisson rouge">
        </div>
    </div>

    <script src="../../JS/popup.js"></script>
</body>

</html>