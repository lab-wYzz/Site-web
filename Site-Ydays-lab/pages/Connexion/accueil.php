<?php
session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {
    header('Location: ../login/logout.php');
    exit();
}

$xp = $_SESSION['xp'];
$progbar = round((($xp * 100) / 10000), 0)

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%4E<link rel=" preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../../css/accueil.css">

    <title>Accueil - Commence a choisir ce que tu veux faire !!</title>
</head>

<body>
    <header>
        <div class="test">
            <h1>wYzz</h1>
            <a href="../login/logout.php"><button class="deconnexion">Deconnexion</button></a>
            <button class="settings" id="settings">
                <ion-icon name="settings-outline" class="icon-settings"></ion-icon>
            </button>
            <?php include '../../compenents/parametre.php' ?>
        </div>
    </header>
    <section>
        <div class="level">
            <h4 class="level_h4">Tu es rang
                <?= $progbar ?>
            </h4>
            <div class="progression">
                <div class="progress-circle" data-value="<?= $progbar ?>">
                    <div class="progress-masque">
                        <div class="progress-barre"></div>
                        <div class="progress-sup50"></div>
                        <img class="plastic" src="../../assets/plastic_bag.jpg" alt="plastic">
                    </div>
                </div>
            </div>
            <h5 class="xp">
                <?= $xp ?> XP
            </h5>
        </div>
    </section>
    <section>
        <div class="div_button">
            <button class="button">
                <a class="links" href="../question/question.php">Filières</a>
            </button>
            <button class="button">Culture G</button>
            <button class="button">Jeux</button>
        </div>
    </section>

    <script src="../../JS/settings.js"></script>
</body>

</html>