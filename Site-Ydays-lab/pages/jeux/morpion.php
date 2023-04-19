<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./morpion.css" />
    <title>Morpion</title>
  </head>
  <body>
    <h1> <em>Morpion</em></h1>
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
    </div>
    <script src="./morpion.js"></script>
  </body>
</html>