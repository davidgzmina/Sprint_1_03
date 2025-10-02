
<?php
/*
Crea una función que reciba como parámetros un array de palabras y un carácter. La función debe devolver true
si todas las palabras del array contienen el carácter pasado como segundo parámetro.
Por ejemplo:
Si tenemos ["hola", "Php", "Html"], devolverá true si preguntamos por "h", pero false si preguntamos por "l".
*/

$words = ["Lola","Paola","Lolo"];

$letter = "a";


function letterSearcher($words,$letter){

    foreach($words as $word){

        $found = false;

        for ($i = 0; $i < strlen($word); $i++){
            if($word[$i] == $letter){
                $found = true;
                break;
            }
        }

        if($found == false){
            return false;
        }
    }

    return true;
}


$resultado = letterSearcher($words,$letter);


if ($resultado==true){
    echo "Todas las palabras del array contienen la letra $letter.";
}
else{
    echo "No todas las palabras del array contienen la letra $letter.";
}
 


