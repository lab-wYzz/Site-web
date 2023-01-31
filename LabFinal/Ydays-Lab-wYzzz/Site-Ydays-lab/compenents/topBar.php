<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/topBar.css">
    <title>wYzz</title>
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="home">
                <a href="../pages/accueil.php">
                    <ion-icon class="icon-home" name="home-outline"></ion-icon>
                </a>

            </div>
            <div class="title">
                <h3>Variable selon la question</h3>
            </div>
            <div class="param">
                <button id="settings">
                    <ion-icon class="icon-parametre" name="settings-outline"></ion-icon>
                </button>

                <div class="parametre">
                    <div class="parametre-container">
                        <div class="icon">
                            <ion-icon name="podium-outline"></ion-icon>
                            <a class="links" href="../pages/score.php">Classement</a>
                        </div>

                        <div class="icon">
                            <ion-icon name="pie-chart-outline"></ion-icon>
                            <a class="links" href="../pages/question.php">Statistique</a>
                        </div>

                        <div class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                            <a class="links" href="#">Compte</a>
                        </div>
                        <button class="deconnexion">Deconnexion</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="../JS/settings.js"></script>
</body>

</html>