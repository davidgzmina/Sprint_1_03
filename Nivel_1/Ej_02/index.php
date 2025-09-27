<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_1_Tema_3_Ej_02</title>
    <style>
        body{
            font-size: 30px;
            color: darkblue;
            background-color:floralwhite;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body>
<?php
/*
Haz un programa que tenga un array indexado de 6 elementos y luego:
- Muestra por pantalla el tamaño del array anterior.
- Elimina un elemento del array anterior. Comprueba que los índices/claves del array estén normalizados (se deben reorganizar sus índices para que no haya saltos entre ellos).
- Muestra por última vez el tamaño del array y su contenido.

*/

$frutas = ["Manzanas","Fresas","Platanos","Melones","Sandias","Melocotones"];


echo "El array tiene un tamaño de " . count($frutas) . " elementos.<br>";

print_r($frutas) . "<br>";

echo "<br>Perfecto ahora vamos a quitarle la posicion 5 que corresponde a " 
. $frutas[5]  . " y luego mostraremos otra vez los elementos y cuantos hay.<br>";

unset($frutas[5]);

$frutas = array_values($frutas);

print_r($frutas) . "<br>";

echo "<br>El array ahora tiene un tamaño de " . count($frutas) . " elementos.<br>";


?>
    
</body>
</html>