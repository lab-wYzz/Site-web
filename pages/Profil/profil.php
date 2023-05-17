<?php

session_start();

require("../../loadenv.php");
$host = $_ENV["DB_HOST"];
$port = $_ENV["DB_PORT"];
$name = $_ENV["DB_DATABASE"];
$user = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];

$dsn = "mysql:host={$host};port={$port};dbname={$name};charset=utf8";
$dbh = new PDO($dsn, $user, $password, [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_STRINGIFY_FETCHES => false
]);

$pseudo = $_SESSION['pseudo'];
$requete = "SELECT * FROM wyzz_user WHERE pseudo = :pseudo";
$result = $dbh->prepare($requete);
$result->bindParam('pseudo', $pseudo);
$result->execute();

foreach ($result as $row) {
    $_SESSION['xp'] = $row["xp"];
}

$stmt = $dbh->prepare("SELECT id_user, xp FROM wyzz_user");
$stmt->execute();
$result = $stmt->fetchAll();
usort($result, function ($a, $b) {
    $a = $a['xp'];
    $b = $b['xp'];
    return ($a == $b) ? 0 : (($a < $b) ? 1 : -1);
});

$item = NULL;
$val = $_SESSION['id_user'];
foreach ($result as $obj) {
    if ($val == $obj[0]) {
        $item = $obj;
        break;
    }
}

$ranking = 0;
if (!is_null($item))
    $ranking = array_search($item, $result) + 1;

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

    <title>Profil - Regarde tes statistiques !!</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>
    <?php require '../../compenents/topBar.php' ?>

    <main class="mainProfil">

        <table class="stats">
            <thread class="thread">
                <tr class="title">
                    <th colspan="5">Statistiques personnelles</th>
                </tr>
                <tr class="données">
                    <th scope="stat">Pseudo</th>
                    <th scope="stat">email</th>
                    <th scope="stat">Filiere</th>
                    <th scope="stat">XP</th>
                    <th scope="stat">Rang</th>
                </tr>
            </thread>
            <tbody class="tbody">
                <tr>
                    <td scope="row" data-label="pseudo">
                        <?php echo $_SESSION['pseudo'] ?>
                    </td>
                    <td data-label="email">
                        <?php echo $_SESSION['email'] ?>
                    </td>
                    <td data-label="filiere">
                        <?php echo $_SESSION['filiere'] ?>
                    </td>
                    <td data-label="xp">
                        <?php echo $_SESSION['xp'] ?>
                    </td>
                    <td data-label="rang">
                        <?php echo "$ranking" ?>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="rankProfil">
            <img id="imgrank" class="rankLogoProfil" src="../../assets/rank-1.png" alt="Rank">
            <span id="xp_value">test</span>
            <div class="progress-bar">
                <div class="progress-fill" id="level"></div>
            </div>
        </div>
    </main>


    <?php require '../../compenents/footer.php' ?>


    <script src="../../JS/profil.js"></script>
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