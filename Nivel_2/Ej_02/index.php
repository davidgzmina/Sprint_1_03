<?php


/*
Crea un programa que llisti les notes dels/les alumnes d’una classe.
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne.
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes,
ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
*/



$notasAlumnos = [
    "Gandalf" => [8, 9, 7, 10, 6],
    "Gimli" => [5, 6, 7, 8, 9],
    "Legolas" => [4, 8, 5, 6, 7],
];



function checkList($notasAlumnos){

  

    $notasGandalf = $notasAlumnos["Gandalf"];
    $notasGimli = $notasAlumnos["Gimli"];
    $notasLegolas = $notasAlumnos["Legolas"];

    echo "Notas de Gandalf: " . PHP_EOL;
    foreach ($notasGandalf as $nota){
        echo $nota . ", ";
    }
     echo PHP_EOL . "Notas de Gimli: " . PHP_EOL;
    foreach ($notasGimli as $nota){
        echo $nota .  ", ";
    }

    echo PHP_EOL . "Notas de Legolas: " . PHP_EOL;
    foreach ($notasLegolas as $nota){
        echo $nota .  ", ";
    }




}

function checkMedia($notasAlumnos,$numNotasAlum,$numNotasClase){

    echo PHP_EOL . "Medias de la clase: " . PHP_EOL;



    $notasGandalf = $notasAlumnos["Gandalf"];
    $notasGimli = $notasAlumnos["Gimli"];
    $notasLegolas = $notasAlumnos["Legolas"];

    $mediaAlumno1 = array_sum($notasGandalf)/$numNotasAlum;
    $mediaAlumno2 = array_sum($notasGimli)/$numNotasAlum;
    $mediaAlumno3 = array_sum($notasLegolas)/$numNotasAlum;


    $mediaClase = array_sum($notasAlumnos)/$numNotasClase;

    echo "Media de notas de Gandalf: " . $mediaAlumno1 . PHP_EOL;
    echo "Media de notas de Gimli: " .  $mediaAlumno2 . PHP_EOL;
    echo "Media de notas Legolas: ". $mediaAlumno3 . PHP_EOL;
    echo "Media de notas de la clase: ". $mediaAlumno3 . PHP_EOL;

}


checkList($notasAlumnos);
checkMedia($notasAlumnos,5,15);

