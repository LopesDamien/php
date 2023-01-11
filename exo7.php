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
            <label>Veuillez saisir un prenom :</label>
            <input type="text" name="prenom">
            <input type="submit" value="Confirmer">            
        </form>
        <?php
   
         $_SESSION["nom"] = $_GET["nom"];
         if($_SESSION["nom"] == '')
         {
             echo "Le prenom inscrit est : <font color='purple'>".($_GET["prenom"])."</font>";  
         }
        else{
           echo"sa marche pas looser";
          }
          ?>
</body>
</html>