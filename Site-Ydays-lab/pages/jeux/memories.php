<!DOCTYPE html>
<html>

<head>
    <title>Jeu de réflexe</title>
    <link rel="stylesheet" type="text/css" href="reflexe.css">
    <link rel="stylesheet" href="../../index.css">
</head>

<body>

    <?php include "../../compenents/topBar.php" ?>

    <h1>Memories</h1>

    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Memory</h1>
        <p>Le but de ce jeu est de tester votre mémoire visuelle et votre capacité à vous souvenir des séquences de
            couleurs. C'est un jeu amusant et stimulant qui peut être joué seul ou avec des amis pour voir qui peut
            obtenir le meilleur score.</p>
        <input id="modal-btn" type="button" value="Commencer" class="btn">
    </div>

    <div id="game">
        <div class="row">
            <div class="color-box" id="red"></div>
            <div class="color-box" id="green"></div>
        </div>
        <div class="row">
            <div class="color-box" id="blue"></div>
            <div class="color-box" id="yellow"></div>
        </div>
        <input id="modal-btn" type="button" value="Jouer" class="start btn">

    </div>

    <script src="../../JS/memories.js"></script>
    <script src="../../JS/popup.js"></script>

</body>

</html>