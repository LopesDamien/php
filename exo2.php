<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
$a = array(
    "1" => "0",
    "2" => "53",
    "3" => "60",
    "4" => "50",
    "5" => "10",
    
);

for ($i=1 ; $i<=5 ; $i++)
{
    echo '['.$a[$i]."]";
}



?>
</div>
</body>
</html>