<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_01_tema_03_ej_04</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: cadetblue;
            font-size: 30px;
            color: white;
        }
    </style>
</head>
<body>
<?php
/*
Haz un array asociativo que represente información sobre ti mismo/a. En concreto debe incluir:
- nombre
- edad
- correo electrónico
- comida favorita

*/
    
$miPersona = [
    "nombre" => "David",
    "edad" => 30,
    "correo electronico" => "phpEnjoyer@gmail.com",
    "comida favorita" => "tortilla de patatas con CEBOLLA"

];

print_r($miPersona);
?>

</body>
</html>