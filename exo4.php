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

$a = 2; $b = -9; $c = -5;
$delta = pow($b, 2) - (4*$a*$a);
$x0 = -$b/(2*$a);
$x1 = (-$b+sqrt($delta))/(2*$a);
$x2 = (-$b-sqrt($delta))/(2*$a);

echo " On cherche à résoudre l'équation <strong> ax²+bx+c </strong> avec pour valeurs :<br>A=<strong> 2</strong><br>B= <strong>-9</strong><br>C= <strong>-5</strong>";


if ($delta > 0)
{
    echo "L'équation admet deux solutions <strong>X1</strong> et <strong>X2</strong> qui sont : <br> X1= <strong>" .$x1. "</strong><br> X2 =<strong> ".$x2. "</strong>";
}
elseif ($delta == 0)
{
    echo "L'équation n'admet qu'un solution X0 qui est :<br>".$x0;
}
elseif ($delta < 0)
{
    echo "L'équation donnée n'admet pas de solution :/ ";
}


?>
</body>
</html>