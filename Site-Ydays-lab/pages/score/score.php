<!--  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/score.css">
    <title>LeaderBoard Using PHP</title>
</head>

<body>
    <header>
        <?php require '../../compenents/topBar.php' ?>
    </header>

    <h2 class="title_classement">Classement General</h2>
    <main>
        <div class="scroll-bg">
            <div class="scroll-div" id="tableScroll">
                <table class="scroll-object">
                    <thead>
                        <th>Rang</th>
                        <th>Pseudo</th>
                        <th>Xp</th>
                        <th>Filière</th>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) : ?>
                            <tr>
                                <td>
                                    <?php echo "$ranking" ?>
                                </td>
                                <td>
                                    <?php echo $row['pseudo'] ?>
                                </td>
                                <td>
                                    <?php echo $row['xp'] ?>
                                </td>
                                <td>
                                    <?php echo $row['filiere'] ?>
                                </td>
                            </tr>
                            <?php $ranking++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php require '../../compenents/background.php' ?>
    </main>
    <script src="../../JS/score.js"></script>
</body>

</html>