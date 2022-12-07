<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
            <label>Veuillez saisir un prenom :</label>
            <input type="text" placeholder="ex : jeanlouisdavid" name="prenom">
            <input type="submit" value="Confirmer">            
        </form>

        <?php
        echo "Le prenom inscrit est : <font color='red'>".$_POST["prenom"]."</font>";
        ?>
</body>
</html>
