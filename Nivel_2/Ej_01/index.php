<?php


/*
Imagina que tens dues llistes de convidats(representats/es únicament per noms). 
Fes un programa que et retorni:

La llista de convidats en comú entre les dues llistes.
La mescla de la llista de convidats(sense repeticions).
La llista de convidats exclusius de la primera llista.
La llista de convidats exclusius de la segona llista.

*/



$lista1 = ["Pablo","Jorge","Jose","David"];

$lista2 =["David","Daniel","Pablo","Jose"];

$listasMix = array_merge($lista1,$lista2);


//print_r($listasMix);


function checkCommonNames($lista1,$lista2){

    echo PHP_EOL . "Lista de invitados en comun:" . PHP_EOL;

    $commonNames = array_intersect($lista1,$lista2);

    foreach($commonNames as $value){
        echo  $value . PHP_EOL;
    }

}

function checkExclusiveListNames($listasMix){

    echo  PHP_EOL . "Lista de invitados sin repeticiones: " . PHP_EOL ;

    $exclusiveNames = array_unique($listasMix);

    foreach($exclusiveNames as $value){
        echo  $value . PHP_EOL;
    }

}


function checkFirstList($lista1,$lista2){

    echo  PHP_EOL . "Invitado exclusivo de la primera lista: " . PHP_EOL;

    foreach($lista1 as $value){
        
        if (in_array($value,$lista2) == false){
            echo   $value . PHP_EOL;
        }
        
    }

}

function checkSecondList($lista1,$lista2){

    echo  PHP_EOL . "Invitado exclusivo de la segunda lista: " . PHP_EOL;

    foreach($lista2 as $value){
        
        if (in_array($value,$lista1) == false){
            echo   $value . PHP_EOL;
        }
        
    }

}

checkFirstList($lista1,$lista2);
checkSecondList($lista1,$lista2);
checkCommonNames($lista1,$lista2);
checkExclusiveListNames($listasMix);