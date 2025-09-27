<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_1_Tema_3_Ej_01 </title>
    <style>
        body{
            font-size: 50px;
            color: darkblue;
            background-color:floralwhite;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

    </style>
</head>
<body>
<?php
/*
Crea un array, añádele 5 números enteros y luego muéstralos por pantalla uno por uno.
*/

$numeros = [0,4,8,12,16];

$i=1;


foreach ($numeros as $numero){
    echo "Numero $i del array: " . $numero . "<br>";
    $i++;
}


?>
    
</body>
</html>