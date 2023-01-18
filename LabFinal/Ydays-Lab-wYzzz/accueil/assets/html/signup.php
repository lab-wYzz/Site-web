<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Signup</title>
</head>

<body>
    <div class="box">
        <div class="form">
            <h2>Sign Up</h2>
            <form action="../../../formGET.php" method="get">
                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass_user" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <input type="submit" value="Valider" />
            </form>
            <div class="links">
                <a href="./login.php">Sign In</a>
            </div>
        </div>
    </div>
</body>

</html>