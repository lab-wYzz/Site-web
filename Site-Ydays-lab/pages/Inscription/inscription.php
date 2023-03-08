<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;700&family=Mina:wght@400;700&family=Zen+Dots&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Bienvenue sur wyzz - Inscrivez vous pour commencer l'aventure</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>

    <main class="main">
        <div class="container">

            <div class="form">
                <h2>Inscription</h2>
                <p class="input-container">
                    <input type="email" id="input-password" class="login-input">
                    <label for="input-password" unselectable="on">Email</label>
                </p>

                <div class="items" id="filiere">
                    <label class="items">Filiere : </label>
                    <select id="selectfil" class="items" name="filiere">
                        <option value="informatique">Informatique</option>
                        <option value="audiovisuel">Audio Visuel</option>
                        <option value="webmanagement">Technology & Business</option>
                        <option value="marketcomm">Marketing & Communication</option>
                        <option value="archi">Architecture d'intérieur</option>
                        <option value="3danim">3D, Animation & Jeux-vidéo</option>
                    </select>
                </div>
                <p class="input-container">
                    <input type="text" id="input-username" class="login-input">
                    <label for="input-username" unselectable="on">Username</label>
                </p>
                <p class="input-container">
                    <input type="password" id="input-password" class="login-input">
                    <label for="input-password" unselectable="on">Password</label>
                </p>
                <p class="input-container">
                    <input type="password" id="input-password" class="login-input">
                    <label for="input-password" unselectable="on">Confirmer votre Password</label>
                </p>
                <p class="inscription">Deja inscrits ? <a href="../../pages/Connexion/connexion.php">Connectez-vous</a>
                </p>
                <div class="validation">
                    <input type="submit" class="btn" value="Valider">
                    <span class="material-symbols-outlined btnInfo">
                        pending
                    </span>
                </div>
            </div>

            <div class="info">
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