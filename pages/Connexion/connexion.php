<?php
session_start();

$message = "";

// definit le contenu du message d'erreur si il existe
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;700&family=Mina:wght@400;700&family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Bienvenue sur wyzz - Connectez vous pour commencer</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>

    <main class="main">
        <div class="container">

            <form action="../login/loging.php" class="form">
                <h2>Connexion</h2>
                <p class="input-container">
                    <input name="pseudo" type="text" id="input-username" class="login-input">
                    <label for="input-username" unselectable="on">Username</label>
                </p>
                <p class="input-container">
                    <input name="pass_user" type="password" id="input-password" class="login-input">
                    <label for="input-password" unselectable="on">Password</label>
                </p>
                <p class="inscription">Toujours pas inscrits ? <a href="../../pages/Inscription/inscription.php">Inscrivez-vous</a>
                </p>
                <div class="validation">
                    <input type="submit" class="btn" name="type" value="Connexion">
                    <span class="material-symbols-outlined btnInfo">
                        pending
                    </span>
                </div>
            </form>

            <div class="info">
                <p id="test_message">
                    <?= $message ?>
                </p>
                <p>Bienvenue sur notre quizz dédier aux élèves de Sophia Ynov Campus.
                    Le but de ce quizz est de découvrir les différentes filières qu’il y a au seins de l’école.
                    Identifier vous, avec vos identifiants de l’extranet pour commencer à jouer.</p>

                <img class="logo" src="../../assets/logo-wYzz.png" alt="Logo wYzz">
                <span class="material-symbols-outlined btnClose">
                    cancel
                </span>
            </div>

        </div>
    </main>


    <script src="../../JS/connexion.js"></script>
</body>

</html>