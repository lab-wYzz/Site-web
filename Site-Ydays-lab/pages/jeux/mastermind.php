<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mastermind.css">
        <title>Mastermind</title>
    </head>

<body>

    <nav class="topBar">
        <h1><a href="../index.php">Challenge-48H</a></h1>
        
    </nav>
<?php
 ?>
    <div class="overlay"></div>
    <div id="modal" class="modal">
        <span id="modal-btn" class="material-symbols-outlined">
            cancel
        </span>

        <!--  
        <div class="modalContenue">
            <h1>Regle du jeu</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod optio cum porro reprehenderit sed at illum.
                Eos, debitis iusto? Laudantium esse unde veniam quaerat voluptatem! Saepe, facere. At, dolore
                repellendus?
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod optio cum porro reprehenderit sed at illum.
                Eos, debitis iusto? Laudantium esse unde veniam quaerat voluptatem! Saepe, facere. At, dolore
                repellendus?
            </p>
        </div>
    </div>
     -->
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
   
    <script src="mastermind.js"></script>

</body>