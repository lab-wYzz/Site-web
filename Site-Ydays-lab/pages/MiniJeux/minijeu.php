<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../css/minijeu.css">
    <link rel="stylesheet" href="../../index.css">
    <title>Mini Jeux - Es-tu pret a jouer ?</title>
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Mini Jeux</h1>
        <p>Les mini-jeux sont une manière amusante et interactive de gagner de l'expérience en culture générale. Les
            joueurs peuvent choisir parmi divers jeux et gagner de l'XP en les complétant. Cela encourage
            l'apprentissage et permet de débloquer de nouveaux mini-jeux et atteindre des niveaux supérieurs dans le
            jeu.</p>
        <input id="modal-btn" type="button" value="Jouer" class="btn">
    </div>

    <div class="game">
        <a id="morpion-link" href="../jeux/morpion.html">
            <div class="morpion">
                Morpion
            </div>
        </a>

    </div>

    

    



    <script src="../../JS/popup.js"></script>
</body>

</html>