<?php

session_start();

// empêcher l'utilisateur d'accédé à la page s'il n'est pas connecté en le renvoyant sur la page de connexion
if ($_SESSION['id_user'] == "" || $_SESSION['email'] == "" || $_SESSION['pseudo'] == "" || $_SESSION['filiere'] == "" || $_SESSION['pass_user'] == "" || $_SESSION['xp'] == "") {
    header('Location: ../login/logout.php');
    exit();
}

$user = "root";
$pass = "";
$dbh = new PDO('mysql:host=localhost;dbname=wyzz', $user, $pass);
$pseudo = $_SESSION['pseudo'];
$requete = "SELECT * FROM user WHERE pseudo = :pseudo";
$result = $dbh->prepare($requete);
$result->bindParam('pseudo', $pseudo);
$result->execute();

foreach ($result as $row) {
    $_SESSION['xp'] = $row["xp"];
}

try {

    $stmt = $dbh->prepare("SELECT pseudo, xp, filiere FROM user LIMIT 5");

    $stmt->execute();
    $result = $stmt->fetchAll();

    usort($result, function ($a, $b) {
        $a = $a['xp'];
        $b = $b['xp'];
        return ($a == $b) ? 0 : (($a < $b) ? 1 : -1);
    });
    $ranking = 1;
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
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
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;700&family=Mina:wght@400;700&family=Zen+Dots&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <title>Accueil - Commence a choisir ce que tu veux faire !!</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <main class="mainAccueil">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="../Filiere/next_quest.php"><img class="categorie"
                            src="../../assets/Filiere.png" alt="Culture general"></a></div>
                <div class="swiper-slide"><a href="../CultureG/next_quest.php"><img class="categorie"
                            src="../../assets/CultureG.png" alt="Mini Jeux"></a></div>
                <div class="swiper-slide"><a href="../MiniJeux/minijeu.php"><img class="categorie"
                            src="../../assets/MiniJeu.png" alt="Filiere"></a></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev fleche"></div>
            <div class="swiper-button-next fleche"></div>
        </div>


        <div class="rank">
            <img id="imgrank" class="rankLogo" src="../../assets/rank-1.png" alt="Rank">
            <span id="xp_value">test</span>
            <div class="progress-bar">
                <div class="progress-fill" id="level"></div>
            </div>
            <h2 class="pseudo">
                <?php echo $_SESSION['pseudo'] ?>
            </h2>
        </div>

        <table>
            <thead>
                <tr>
                    <th colspan="5">Classement General</th>
                </tr>
                <tr class="thead">
                    <th scope="col">Pseudo</th>
                    <th scope="col">XP</th>
                    <th scope="col">top</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row): ?>
                <tr>
                    <td data-label="pseudo">
                        <?php echo $row['pseudo'] ?>
                    </td>
                    <td data-label="xp">
                        <?php echo $row['xp'] ?>
                    </td>
                    <td data-label="rang">
                        <?php echo "$ranking" ?>
                    </td>
                </tr>
                <?php $ranking++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php require '../../compenents/footer.php' ?>


    <script src="../../JS/accueil.js"></script>
    <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

    var xp = <?= $_SESSION["xp"] ?>;
    var ratio = 0;

    if (xp >= 0 && xp < 500) {
        ratio = (xp * 100) / 500;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-1.png");
    } else if (xp >= 500 && xp < 1500) {
        ratio = ((xp - 500) * 100) / 1000;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-2.png");
    } else if (xp >= 1500 && xp < 3000) {
        ratio = ((xp - 1500) * 100) / 1500;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-3.png");
    } else if (xp >= 3000 && xp < 5000) {
        ratio = ((xp - 3000) * 100) / 2000;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-4.png");
    } else if (xp >= 5000 && xp < 7500) {
        ratio = ((xp - 5000) * 100) / 2500;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-5.png");
    } else if (xp >= 7500 && xp < 10000) {
        ratio = ((xp - 7500) * 100) / 2500;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-6.png");
    } else {
        ratio = 100;
        document.getElementById("imgrank").setAttribute("src", "../../assets/rank-7.png");
    }

    if (ratio > 100) {
        ratio = 100;
    }

    document.getElementById("xp_value").innerHTML = xp + " XP (" + ratio.toFixed(2) + "%)";
    document.getElementById("level").style.width = ratio + '%';
    document.documentElement.style.cssText = '--xp :' + ratio + '%;';

    // Récupérer l'élément image
    const img = document.getElementById("imgrank");

    // Vérifier si l'xp est supérieure à 500
    if (xp >= 500 && xp < 1500) {
        // Modifier l'attribut src de l'image
        img.setAttribute("src", "../../assets/rank-2.png");
    } else if (xp >= 1500 && xp < 3000) {
        img.setAttribute("src", "../../assets/rank-3.png");
    } else if (xp >= 3000 && xp < 5000) {
        img.setAttribute("src", "../../assets/rank-4.png");
    } else if (xp >= 5000 && xp < 7500) {
        img.setAttribute("src", "../../assets/rank-5.png");
    } else if (xp >= 7500 && xp < 10000) {
        img.setAttribute("src", "../../assets/rank-6.png");
    } else if (xp >= 1000 && xp < 100000) {
        img.setAttribute("src", "../../assets/rank-7.png");
    }
    </script>
</body>

</html>