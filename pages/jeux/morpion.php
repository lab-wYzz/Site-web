<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../index.css">
    <title>Morpion</title>
</head>

<body>

    <?php include "../../compenents/topBar.php" ?>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Morpion</h1>
        <p>Le but est d'aligner trois de vos marques en ligne horizontale, verticale ou diagonale. Le premier joueur à
            accomplir cela gagne la partie.
            Si toutes les cases sont remplies et qu'aucun joueur n'a réussi à aligner trois marques, la partie se
            termine en un match nul.</p>
        <input id="modal-btn" type="button" value="Commencer" class="btn">
    </div>

    <div class="container-morpion">
        <h1 class="titlesGame">Morpion</h1>
        <div id="grid">
            <div id="c1" class="case"></div>
            <div id="c2" class="case"></div>
            <div id="c3" class="case"></div>
            <div id="c4" class="case"></div>
            <div id="c5" class="case"></div>
            <div id="c6" class="case"></div>
            <div id="c7" class="case"></div>
            <div id="c8" class="case"></div>
            <div id="c9" class="case"></div>
        </div>
        <div id="score">
            <p>C'est au tour de Joueur <span id="joueur">1</span></p>
            <p>Score Joueur 1 : <span id="score1">0</span></p>
            <p>Score Ordinateur : <span id="score2">0</span></p>
            <p>Matchs nuls : <span id="scoreNul">0</span></p>
            <div class="message"></div>
        </div>
    </div>
    <script src="../../JS/morpion.js"></script>
    <script src="../../JS/popup.js"></script>

</body>

</html>