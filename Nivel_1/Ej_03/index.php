<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint_01_tema_03_ej_03</title>

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
Crea una función que reciba como parámetros un array de palabras y un carácter. La función debe devolver true
si todas las palabras del array contienen el carácter pasado como segundo parámetro.
Por ejemplo:
Si tenemos ["hola", "Php", "Html"], devolverá true si preguntamos por "h", pero false si preguntamos por "l".
*/

$palabras = ["merengue","colacao","cubata","cacatua"];

$letra = "c";


function buscarLetra($palabras,$letra) {
    foreach($palabras as $palabra){
        if(strpos($palabra,$letra)===false){
            return false;
        }
        else{
            return true;
        }
    }
}

$resultado = buscarLetra($palabras,$letra);

if($resultado===true){
    echo "Todas las palabras del array contienen la letra $letra.<br>";
}
else{
    echo "No todas las palabras del array contienen la letra $letra.";
}

?>

</body>
</html>