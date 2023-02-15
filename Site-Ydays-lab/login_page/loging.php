<?php
session_start();

$type = $_GET["type"];

// recupère les informations spécifiques à l'inscription
if ($type == "Inscription") {
    $pseudo = $_GET["pseudo"];
    $filiere = $_GET["filiere"];
}

$user = $_GET["email"];
$pass = $_GET["pass_user"];

$show_users = "";
$next = true;

// accède à la base de données SQL
$dbh = new PDO('mysql:host=localhost;dbname=Ywzz', "root", "");
$requete = "SELECT * FROM user WHERE email = '$user'";
$result = $dbh->query($requete);

// vérification en cas de connexion
if ($type === "Connexion") {
    foreach ($result as $row) {
        if ($user == $row["email"]& $pass == $row["pass_user"]) {
            // définit les variables de la session de la personne connectée
            $show_users = $show_users . 'id_user : ' . $row["id_user"] . '</br>' . 'email : ' . $row["email"] . '</br>' . 'pseudo : ' . $row["pseudo"] . '</br>' . 'filiere : ' . $row["filiere"] . '</br>' . 'pass_user : ' . $row["pass_user"] . '</br>' . 'xp : ' . $row["xp"];
            $_SESSION['id_user'] = $row["id_user"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['pseudo'] = $row["pseudo"];
            $_SESSION['filiere'] = $row["filiere"];
            $_SESSION['pass_user'] = $row["pass_user"];
            $_SESSION['xp'] = $row["xp"];
            $_SESSION['message'] = "Connected";
            header('Location: ../pages/accueil.php');
        }
    }
    if ($show_users == "") {
        // renvoie l'utilisateur sur la page de connexion si il ne parvient pas à se connecter 
        $_SESSION['message'] = "Email ou Mot de passe incorrect";
        header('Location: login.php');
    }
}


// vérification en cas d'inscription
if ($type === "Inscription") {
    foreach ($result as $row) {
        if ($user == $row["email"]) {
            // renvoie l'utilisateur sur la page de connexion si le compte existe déjà
            $next = false;
            $show_users = "déjà inscrit";
            $_SESSION['message'] = $show_users;
            header('Location: login.php');

        }
    }
    if ($next == true) {
        // cré le compte de l'utilisateur dans la base de données SQL et le renvoie sur l'accueil
        if (str_contains($user, '@') & str_contains($user, '.')) {
            $requete = "INSERT INTO user (email, pseudo, filiere, pass_user) VALUES ('$user','$pseudo','$filiere','$pass')";
            $result = $dbh->exec($requete);
            header('Location: loging.php?email=' . $user . '&pass_user=' . $pass . '&type=Connexion');
        } else {
            $show_users = "format de mail non conforme";
            $_SESSION['message'] = $show_users;
            header('Location: login.php');
        }
    }
}

?>