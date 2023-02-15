<?php
session_start();

$message = "";

// definit le contenu du message d'erreur si il existe
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header id="blur">
        <div class="nav">
            <p>Page de connexion</p>
        </div>
    </header>

    <main>
        <div id='menu-button'></div>
        <div id="to_blur">
            <p id="test_message">
                <?= $message ?>
            </p>
            <!-- formulaire de connexion -->
            <div id="login" class="connect">
                <form action="loging.php" class="login">
                    <p>Connexion</p>
                    <input class="input" type="email" name="email" placeholder="Email" required="required" />
                    <div class="inputBox">
                        <input class="input" type="password" id="pswrd" name="pass_user" placeholder="Mot de passe"
                            required="required" />
                        <span class="input" id="toggleBtn"></span>
                    </div>
                    <input type="submit" name="type" value="Connexion" />
                </form>
            </div>

        </div>

        <!-- formulaire d'inscription -->
        <div id="inscrip">
            <form id="inscription" action="loging.php" class="new_user">
                <p id="title" class="items">Inscription</p>
                <input id="email" class="items" type="email" name="email" placeholder="Email" required />
                <input id="pseudo" class="items" type="text" name="pseudo" placeholder="Pseudo" required />
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
                <input id="pass" class="items" type="password" name="pass_user" placeholder="Mot de passe" required />
                <input id="pass_conf" class="items" type="password" name="pass_user_conf"
                    placeholder="Confirmation mot de passe" required />
                <input id="submit" class="items" type="submit" name="type" value="Inscription" />
            </form>
        </div>


    </main>


    <script src="login.js"></script>
</body>

</html>