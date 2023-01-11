
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="GET">
            <label>Veuillez saisir le login :</label>
            <input type="text" placeholder="pseudo" name="login">
            <input type="text" placeholder="mot de passe" name="mdp">
            <input type="submit" value="Confirmer">
            <input type="submit" name="logout" value="Déconnexion">
            
        </form>


        <?php
   
   $_SESSION["login"] = $_GET["login"]; // creation valeur login
   $_SESSION["mdp"] = $_GET["mdp"]; // creation valeur mdp
   if($_SESSION["login"] == 'julien' && $_SESSION["mdp"] == '1234' )// si bon
   {
       echo "Bienvenue";
       
       
   } elseif($_SESSION["login"] != 'julien') // si faux 
    {
     echo "<p><p>le login est inconnu. ";

     }elseif($_SESSION["mdp"] != '1234') // si faux
        {
            echo "<p><p>le mot de passe est incorrect";
        }
   ?>

</body>
</html>