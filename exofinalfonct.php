<?php
    function login_form($login, $password)
    {
        if($_GET["login"] == 'julien' && $_GET["mdp"] == '1234' )// si bon
        {
            $_SESSION["IsConnecting"] = true;

            $_SESSION["login"] = $_GET["login"]; // creation valeur login
            $_SESSION["mdp"] = $_GET["mdp"]; // creation valeur mdp
        } 
        elseif($_GET["login"] != 'julien') // si faux 
        {
            echo "<p>le login est inconnu. </p>";
        }
        elseif($_GET["mdp"] != '1234') // si faux
        {
            echo "<p>le mot de passe est incorrect</p>";
        }
    }
?>