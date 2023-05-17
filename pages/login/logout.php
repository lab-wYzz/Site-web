<?php

// supprime les informations de l'utilisateur connecté de la session actuelle
function destroy()
{
    if (isset($_SESSION)) {
        unset($_SESSION);
        session_unset();
        session_destroy();
    }
    session_start();
    $_SESSION['id_user'] = "";
    $_SESSION['email'] = "";
    $_SESSION['pseudo'] = "";
    $_SESSION['filiere'] = "";
    $_SESSION['pass_user'] = "";
    $_SESSION['xp'] = "";
    $_SESSION['message'] = "Deconnecter avec succes";

    header('Location: ../Connexion/connexion.php');

}

destroy();
