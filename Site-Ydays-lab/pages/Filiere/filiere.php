<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <title>Question Filiere - Es-tu pret a jouer ?</title>
</head>

<body>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <span id="modal-btn" class="material-symbols-outlined">
            cancel
        </span>
        <h1>Regle du jeu</h1>
        <p>Le but est simple ! Pour gagner un point, le joueur doit trouver le bon nombre compris entre 0 et
            1000 inclus en 10 essais ou moins. </p>

        <p> <img src="../img/warning.png" width="30" height="30" />
            - Vérifiez bien votre nombre de chance(s) avant de valider car vous pouvez valider 2 fois d'affilée la même
            réponse !</p>
        <p>- Vous pouvez récupérer encore <?php echo $data["jeux"][2]['max_tentative']; ?> missiles</p>
    </div>
    </div>


    <script src="../../JS/filiere.js"></script>
</body>

</html>