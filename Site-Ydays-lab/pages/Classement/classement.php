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
    <title>Classement General - Qui sera le meilleur ?</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>
    <?php include "../../compenents/topBar.php" ?>

    <table>
        <thead>
            <tr>
                <th colspan="5">Classement General</th>
            </tr>
            <tr class="thead">
                <th scope="col">Pseudo</th>
                <th scope="col">Filiere</th>
                <th scope="col">XP</th>
                <th scope="col">Rang</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td scope="row" data-label="pseudo"><?php echo $row['pseudo'] ?></td>
                    <td data-label="filiere"><?php echo $row['filiere'] ?></td>
                    <td data-label="xp"><?php echo $row['xp'] ?></td>
                    <td data-label="rang"><?php echo "$ranking" ?></td>
                </tr>
                <?php $ranking++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php include "../../compenents/footer.php" ?>
</body>

</html>