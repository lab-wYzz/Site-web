<?php

$user = "root";
$pass = "";
$bdd = new PDO('mysql:host=localhost;dbname=ywzz', $user, $pass);

try {

    $stmt = $bdd->prepare("SELECT pseudo, xp, filiere FROM user ");

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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;700&family=Mina:wght@400;700&family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
                <div class="swiper-slide"><img class="categorie" src="../../assets/CultureGe.png" alt="Culture general">
                </div>
                <div class="swiper-slide"><img class="categorie" src="../../assets/miniJeux.png" alt="Mini Jeux"></div>
                <div class="swiper-slide"><img class="categorie" src="../../assets/filiere.png" alt="Filiere"></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev fleche"></div>
            <div class="swiper-button-next fleche"></div>
        </div>


        <div class="rank">
            <img class="rankLogo" src="../../assets/rank-1.png" alt="Rank">
            <span></span>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
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
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td data-label="pseudo"><?php echo $row['pseudo'] ?></td>
                        <td data-label="xp"><?php echo $row['xp'] ?></td>
                        <td data-label="rang"><?php echo "$ranking" ?></td>
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
    </script>
</body>

</html>