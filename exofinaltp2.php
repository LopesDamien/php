<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            include("exofinalfonct.php");

            if(isset($_GET["connexion"]))
            {
                login_form($_GET["login"], $_GET["mdp"]);
            }
            elseif (isset($_GET["logout"]))
            {
                session_unset();
                session_destroy();
            }

            if (isset($_SESSION["IsConnecting"]) && $_SESSION["IsConnecting"] == true)
            {
                echo "<p>Bienvenue sur le site " .$_SESSION["login"]." !</p>";
                ?>
                    <form action="" method="GET">
                        <input type="submit" name="logout" value="Déconnexion">
                    </form>
                <?php
            }
            else
            {
                ?>
                    <form action="" method="GET">
                        <label>Veuillez saisir le login :</label>
                        <input type="text" placeholder="pseudo" name="login">
                        <input type="text" placeholder="mot de passe" name="mdp">
                        <input type="submit" name="connexion" value="Confirmer">
                    </form>
                <?php
            }
        ?>
    </body>
</html>