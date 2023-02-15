<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%4E<link rel=" preconnect"
        href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/accueil.css">

    <title>Accueil - Commence a choisir ce que tu veux faire !!</title>
</head>

<body>
    <header>
        <div class="test">
            <h1>wYzz</h1>
            <button class="settings" id="settings">
                <ion-icon name="settings-outline" class="icon-settings"></ion-icon>
            </button>
            <?php include '../compenents/parametre.php' ?>
        </div>
    </header>
    <section>
        <div class="level">
            <h4 class="level_h4">Tu es rang</h4>
            <div class="progression">
                <div class="progress-circle" data-value="90">
                    <div class="progress-masque">
                        <div class="progress-barre"></div>
                        <div class="progress-sup50"></div>
                        <img class="plastic" src="../assets/plastic_bag.jpg" alt="plastic">
                    </div>
                </div>
            </div>
            <h5 class="xp">145 XP</h5>
        </div>
    </section>
    <section>
        <div class="div_button">
            <button class="button">
                <a class="links" href="../pages/question.php">Filières</a>
            </button>
            <button class="button">Culture G</button>
            <button class="button">Jeux</button>
        </div>
    </section>

    <script src="../JS/settings.js"></script>
</body>

</html>