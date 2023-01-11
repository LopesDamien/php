<?php
        echo "<h1>youyou</h1>";
        ?>
        <form action="" method="GET">
            <label>Veuillez saisir la commande :</label>
            <input type="text"  name="commande">
            <input type="submit" value="Confirmer">            
        </form>


        <?php
   
   $_SESSION["commande"] = $_GET["commande"]; // creation login
   if($_SESSION["commande"] == 'select * from Medicament' )
   {
    try {
        $ipserver ="192.168.65.183";
        $nomBase = "Medecin";
        $loginPrivilege = "SiteWeb";
        $passPrivilege = "SiteWeb";

       $GLOBALS["pdo"]=new PDO('mysql:host='.$ipserver. ';dbname=' .$nomBase.'' ,$loginPrivilege , $passPrivilege);

$requete = "select * from Medicament";
$resultat = $GLOBALS["pdo"]->query($requete);

if($resultat->rowCount() > 0){
   while($tab = $resultat->fetch()){
       echo "le nom est :" . $tab["nom"] . "id : " . $tab["id"] . "<br>";

   }
}



   } catch (Exception $error) {
       echo"error est :".$error->getMessage();
   }

        } elseif ($_SESSION["commande"] != 'julien') {
            echo "<p><p>la commande est inconnu. ";

        }
   ?>
