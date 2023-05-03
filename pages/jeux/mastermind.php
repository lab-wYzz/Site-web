<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/mastermind.css">
        <link rel="stylesheet" href="../../index.css">
        <title>Mastermind</title>
    </head>

<body>

    <?php include "../../compenents/topBar.php" ?>



    <div class="overlay"></div>
    <div id="modal" class="modal">
        <h1>Mastermind</h1>
        <p>Le but de ce jeu est de tester votre mémoire visuelle et votre capacité à vous souvenir des séquences de
            couleurs. C'est un jeu amusant et stimulant qui peut être joué seul ou avec des amis pour voir qui peut
            obtenir le meilleur score.</p>
        <input id="modal-btn" type="button" value="Commencer" class="btn">
    </div>

    <h1 class="titlesGame">Mastermind</h1>


    <main class="main">
        <div class="game">
            <div class="try">
                <div id="essai">

                </div>
                <div class="contentBtn">
                    <input class="button" type="button" value="R" id="rouge">
                    <input class="button" type="button" value="B" id="bleu">
                    <input class="button" type="button" value="V" id="vert">
                    <input class="button" type="button" value="J" id="jaune">
                    <input class="button" type="button" value="C" id="cyan">
                    <input class="button" type="button" value="O" id="orange">
                    <input class="button" type="button" value="M" id="marron">
                </div>
            </div>
            <div id="place">
            </div>
        </div>


    </main>

    <script src="../../JS/mastermind.js"></script>
    <script src="../../JS/popup.js"></script>

</body>