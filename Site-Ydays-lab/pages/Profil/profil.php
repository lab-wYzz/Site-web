<?php

session_start();

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
        <div class="rankProfil">
            <img class="rankLogoProfil" src="../../assets/rank-1.png" alt="Rank">
            <span id="xp_value">test</span>
            <div class="progress-bar">
                <div class="progress-fill" id="level"></div>
            </div>
        </div>

        <table>
            <thread>
                <tr class="données">
                    <th scope="stat">Pseudo</th>
                    <th scope="stat">email</th>
                    <th scope="stat">Filiere</th>
                    <th scope="stat">XP</th>
                    <th scope="stat">Rang</th>
                </tr>
            </thread>s
            <tbody>
                <tr>
                    <td scope="row" data-label="pseudo">
                        <?php echo $_SESSION['pseudo'] ?>
                    </td>
                    <td data-label="email">
                        <?php echo $_SESSION['email'] ?>
                    </td>
                    <td data-label="filiere">s
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
    </main>


    <?php require '../../compenents/footer.php' ?>


    <script src="../../JS/profil.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

        var ratio = (<?= $_SESSION["xp"] ?> * 100) / 25000;

        document.getElementById("xp_value").innerHTML = '<?= $_SESSION["xp"] ?> XP (' + ratio + '%)';

        if (ratio > 100) {
            ratio = 100;
        }

        console.log(ratio);

        document.getElementById("level").style.width = ratio + '%'

        document.documentElement.style.cssText = '--xp :' + ratio + '%;';

    </script>
</body>

</html>